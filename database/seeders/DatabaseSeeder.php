<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    $this->call([
      UserActiveTypeSeeder::class,
      RoleSeeder::class,
      PositionSeeder::class,
      UserSeeder::class,
      DepartmentSeeder::class,
      PerformanceIndicatorListSeeder::class,
      PermissionListSeeder::class,
      RolesPermissionsSeeder::class,
      TypeJobSeeder::class,
    ]);
  }
}
