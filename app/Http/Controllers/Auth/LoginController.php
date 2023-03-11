<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index(Request $request)
  {
    $date = Carbon::now();
    $date_time = $date->toDateTimeString();
    /**
     * Has token
     */
    if ($user = auth('api')->user()) {
      if ($user == null) {
        return response()->json([
          'message' => 'Token invalid',
        ], 422);
      }

      $user->token = $request->bearerToken();

      ActivityLog::created([
        'name' => $user->name,
        'email' => $user->email,
        'description' => 'Has logged in',
        'date_time' => $date_time,
      ]);
      return response()->json($user, 200);
    }

    /**
     * Login with password
     */
    $request->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if (
      Auth::attempt([
        'email' => $request->email,
        'password' => $request->password,
        'status' => 'Active'
      ])
    ) {
      $user = Auth::user();

      $user->token = $user->createToken('token')->accessToken;
      ActivityLog::created([
        'name' => $user->name,
        'email' => $user->email,
        'description' => 'Has logged in',
        'date_time' => $date_time,
      ]);

      return response()->json($user, 200);
    }

    return response()->json(['message' => 'This email or password is incorrect'], 422);
  }
}
