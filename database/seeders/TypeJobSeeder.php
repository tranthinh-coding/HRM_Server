<?php

namespace Database\Seeders;

use App\Models\TypeJob;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeJobSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    TypeJob::query()->create([
      'name' => 'Full Time'
    ]);
    TypeJob::query()->create([
      'name' => 'Part Time'
    ]);
    TypeJob::query()->create([
      'name' => 'Internship'
    ]);
    TypeJob::query()->create([
      'name' => 'Temporary'
    ]);
    TypeJob::query()->create([
      'name' => 'Remote'
    ]);
    TypeJob::query()->create([
      'name' => 'Others'
    ]);
  }
}
