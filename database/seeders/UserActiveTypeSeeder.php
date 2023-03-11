<?php

namespace Database\Seeders;

use App\Enums\UserActiveTypes;
use App\Models\UserActiveType;
use Illuminate\Database\Seeder;

class UserActiveTypeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    UserActiveType::query()->create([
      'name' => UserActiveTypes::Active
    ]);
    UserActiveType::query()->create([
      'name' => UserActiveTypes::Inactive
    ]);
    UserActiveType::query()->create([
      'name' => UserActiveTypes::Disable
    ]);
  }
}
