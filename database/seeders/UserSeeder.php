<?php

namespace Database\Seeders;

use App\Enums\RoleTypes;
use App\Enums\UserActiveTypes;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::query()->create([
      'name' => 'Lan Anh',
      'email' => 'lananh@gmail.com',
      'password' => Hash::make('123123123'),
      'status' => UserActiveTypes::Active,
      'role' => RoleTypes::Guest,
    ]);
    User::query()->create([
      'name' => 'Tran Thinh',
      'email' => 'tranthinh.own@gmail.com',
      'password' => Hash::make('123123123'),
      'status' => UserActiveTypes::Active,
      'role' => RoleTypes::Employee,
    ]);

  }
}
