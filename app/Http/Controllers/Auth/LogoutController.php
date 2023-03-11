<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LogoutController extends Controller
{
  public function index(Request $request): JsonResponse
  {
    $user = $request->user();
    $date = Carbon::now();
    $date_time = $date->toDateTimeString();

    ActivityLog::created([
      'name' => $user->name,
      'email' => $user->email,
      'description' => 'Has logged out',
      'date_time' => $date_time,
    ]);

    $user->token()->revoke();
    return response()->json([
      "message" => "Logged out successfully"
    ]);
  }
}
