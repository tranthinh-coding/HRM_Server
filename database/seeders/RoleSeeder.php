<?php

namespace Database\Seeders;

use App\Enums\RoleTypes;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Role::query()->create([
      'name' => RoleTypes::Admin
    ]);
    Role::query()->create([
      'name' => RoleTypes::SuperAdmin
    ]);
    Role::query()->create([
      'name' => RoleTypes::HRManager
    ]);
    Role::query()->create([
      'name' => RoleTypes::Employee
    ]);
    Role::query()->create([
      'name' => RoleTypes::Manager
    ]);
    Role::query()->create([
      'name' => RoleTypes::Guest
    ]);
  }
}
