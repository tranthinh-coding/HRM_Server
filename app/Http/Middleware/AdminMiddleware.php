<?php

namespace App\Http\Middleware;

use App\Enums\RoleTypes;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
   * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
   */
  public function handle(Request $request, Closure $next)
  {
    $user = $request->user();
    if (
      $user->role_name === RoleTypes::Admin ||
      $user->role_name === RoleTypes::HRManager ||
      $user->role_name === RoleTypes::Manager ||
      $user->role_name === RoleTypes::SuperAdmin
    ) {
      return $next($request);
    }
    return response([
      'message' => 'Unauthorized'
    ], 401);
  }
}
