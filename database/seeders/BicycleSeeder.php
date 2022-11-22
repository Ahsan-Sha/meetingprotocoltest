<?php

namespace Database\Seeders;

use App\Models\Bicycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BicycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Bicycle::factory()->count(10)->create();
    }
}
