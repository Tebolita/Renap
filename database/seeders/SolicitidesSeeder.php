<?php

namespace Database\Seeders;

use App\Models\Solicitude;
use Illuminate\Database\Seeder;

class SolicitidesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Solicitude::factory(10)->create();
    }
}
