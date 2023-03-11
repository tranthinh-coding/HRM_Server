<?php

namespace Database\Seeders;

use App\Models\PerformanceIndicatorList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerformanceIndicatorListSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    PerformanceIndicatorList::query()->create([
      'per_name_list' => 'None'
    ]);
    PerformanceIndicatorList::query()->create([
      'per_name_list' => 'Beginner'
    ]);
    PerformanceIndicatorList::query()->create([
      'per_name_list' => 'Intermediate'
    ]);
    PerformanceIndicatorList::query()->create([
      'per_name_list' => 'Advanced'
    ]);
    PerformanceIndicatorList::query()->create([
      'per_name_list' => 'Expert / Leader'
    ]);
  }
}
