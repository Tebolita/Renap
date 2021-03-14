<?php

namespace Database\Seeders;


use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(SolicitidesSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(GenerateSeeder::class);
        \App\Models\User::factory(1)->create();

    }
}
