<?php

namespace Database\Seeders;

use App\Models\Generate;
use Illuminate\Database\Seeder;

class GenerateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Generate::factory(0)->create();
    }
}
