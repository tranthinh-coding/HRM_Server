<?php

namespace Database\Seeders;

use App\Models\PermissionList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionListSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    PermissionList::query()->create([
      'permission_name' => 'Holidays',
      'read' => 'Y',
      'write' => 'Y',
      'create' => 'Y',
      'delete' => 'Y',
      'import' => 'Y',
      'export' => 'N'
    ]);
    PermissionList::query()->create([
      'permission_name' => 'Leaves',
      'read' => 'Y',
      'write' => 'Y',
      'create' => 'Y',
      'delete' => 'N',
      'import' => 'N',
      'export' => 'N'
    ]);
    PermissionList::query()->create([
      'permission_name' => 'Clients',
      'read' => 'Y',
      'write' => 'Y',
      'create' => 'Y',
      'delete' => 'N',
      'import' => 'N',
      'export' => 'N'
    ]);
    PermissionList::query()->create([
      'permission_name' => 'Projects',
      'read' => 'Y',
      'write' => 'N',
      'create' => 'Y',
      'delete' => 'N',
      'import' => 'N',
      'export' => 'N'
    ]);
    PermissionList::query()->create([
      'permission_name' => 'Tasks',
      'read' => 'Y',
      'write' => 'Y',
      'create' => 'Y',
      'delete' => 'Y',
      'import' => 'N',
      'export' => 'N'
    ]);
    PermissionList::query()->create([
      'permission_name' => 'Chats',
      'read' => 'Y',
      'write' => 'Y',
      'create' => 'Y',
      'delete' => 'Y',
      'import' => 'N',
      'export' => 'N'
    ]);
    PermissionList::query()->create([
      'permission_name' => 'Assets',
      'read' => 'Y',
      'write' => 'Y',
      'create' => 'Y',
      'delete' => 'Y',
      'import' => 'N',
      'export' => 'N'
    ]);
    PermissionList::query()->create([
      'permission_name' => 'Timing Sheets',
      'read' => 'Y',
      'write' => 'Y',
      'create' => 'Y',
      'delete' => 'Y',
      'import' => 'N',
      'export' => 'N'
    ]);

  }
}
