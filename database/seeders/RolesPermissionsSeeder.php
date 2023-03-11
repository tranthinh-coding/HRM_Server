<?php

namespace Database\Seeders;

use App\Models\RolesPermissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesPermissionsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    RolesPermissions::query()->create([
      'permissions_name' => 'Administrator'
    ]);
    RolesPermissions::query()->create([
      'permissions_name' => 'CEO'
    ]);
    RolesPermissions::query()->create([
      'permissions_name' => 'Manager'
    ]);
    RolesPermissions::query()->create([
      'permissions_name' => 'Team Leader'
    ]);
    RolesPermissions::query()->create([
      'permissions_name' => 'Accountant'
    ]);
    RolesPermissions::query()->create([
      'permissions_name' => 'Web Developer'
    ]);
    RolesPermissions::query()->create([
      'permissions_name' => 'Web Designer'
    ]);
    RolesPermissions::query()->create([
      'permissions_name' => 'HR'
    ]);
    RolesPermissions::query()->create([
      'permissions_name' => 'UI/UX Developer'
    ]);
    RolesPermissions::query()->create([
      'permissions_name' => 'SEO Analyst'
    ]);
  }
}
