<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentDeleteRequest;
use App\Http\Requests\DepartmentSaveRequest;
use App\Http\Requests\DepartmentUpdateRequest;
use Illuminate\Http\Request;
use DB;
use App\Models\Department;

class DepartmentController extends Controller
{
  public function allDepartments()
  {
    $departments = Department::get();
    return response()->json($departments);
  }

  /** save record department */
  public function save(DepartmentSaveRequest $request)
  {
    DB::beginTransaction();
    try {
      $department = Department::where('department', $request->department)->first();

      if ($department === null) {
        $department = new Department;
        $department->department = $request->department;
        $department->save();

        DB::commit();

        return response()->json([
          'message' => 'Add new department successfully :)'
        ], 200);
      }

      DB::rollback();

      return response()->json([
        'message' => 'Add new department exits :)'
      ], 422);
    } catch (\Exception $e) {
      DB::rollback();
      return response()->json([
        'message' => 'Add new department fail :)'
      ], 422);
    }
  }

  public function updateDepartment(DepartmentUpdateRequest $request)
  {
    DB::beginTransaction();
    try {
      $department = Department::where('department', $request->department)->first();

      if ($department !== null && $department->id != $request->id) {
        return response()->json([
          'message' => 'Department was exited :)'
        ], 422);
      }

      Department::where('id', $request->id)->update([
        'department' => $request->department,
      ]);

      DB::commit();
      return response()->json([
        'message' => 'Updated department successfully :)'
      ], 200);
    } catch (\Exception $e) {
      DB::rollback();
      return response()->json([
        'message' => 'Updated department fail :)'
      ], 422);

    }
  }

  public function deleteDepartment(DepartmentDeleteRequest $request)
  {
    try {
      Department::destroy($request->id);

      return response()->json([
        'message' => 'Department deleted successfully :)'
      ], 200);
    } catch (\Exception $e) {
      DB::rollback();
      return response()->json([
        'message' => 'Department deleted fail :)'
      ], 200);
    }
  }
}
