<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Position::query()->create([
      'position' => 'CEO'
    ]);
    Position::query()->create([
      'position' => 'CFO'
    ]);
    Position::query()->create([
      'position' => 'Manager'
    ]);
    Position::query()->create([
      'position' => 'Web Designer'
    ]);
    Position::query()->create([
      'position' => 'Web Developer'
    ]);
    Position::query()->create([
      'position' => 'Web Developer'
    ]);
    Position::query()->create([
      'position' => 'Android Developer'
    ]);
    Position::query()->create([
      'position' => 'IOS Developer'
    ]);
    Position::query()->create([
      'position' => 'Team Leader'
    ]);
  }
}
