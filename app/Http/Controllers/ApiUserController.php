<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Models\User;
use App\Http\Requests\ApiRegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiUserController extends Controller
{
    //
  public function register(ApiRegisterRequest $request) {
    $user = new User();
    $user->fill($request->all());
    $user->password = Hash::make($request->password);
    $user->save();
    $user->token = $user->createToken('token')->accessToken;
    return response()->json($user);
  }

  public function login(ApiLoginRequest $request) {
    if (Auth::attempt([
      'email' => $request->email,
      'password' => $request->password,
    ])) {
      $user = User::whereEmail($request->email)->first();
      $user->token = $user->createToken('token')->accessToken;
      return response()->json($user);
    }

    return response()->json([
      'message' => 'Email or password is incorrect'
    ]);
  }
}
