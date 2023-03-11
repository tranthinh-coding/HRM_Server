<?php

namespace App\Http\Controllers\Auth;

use App\Enums\RoleTypes;
use App\Enums\UserActiveTypes;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApiRegisterRequest;
use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function index(ApiRegisterRequest $request): JsonResponse
  {
    $user = User::create([
      'name' => $request->name,
      'avatar' => '',
      'email' => $request->email,
      'role' => RoleTypes::Guest,
      'status' => UserActiveTypes::Active,
      'password' => Hash::make($request->password),
    ]);

    $user->token = $user->createToken('auth_token')->accessToken;

    ActivityLog::created([
      'name' => $user->name,
      'email' => $user->email,
      'description' => 'Register',
    ]);

    return response()->json($user);
  }
}
