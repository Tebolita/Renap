<?php

namespace Database\Factories;

use App\Models\Solicitude;   
use Illuminate\Database\Eloquent\Factories\Factory;

class SolicitudeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Solicitude::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cedula'=>$this->faker->randomElement([1234567,456789,1234567,456789]),
            'fechanacimiento'=>$this->faker->randomElement(['2001-01-24','2003-11-01']),
            'nombre'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'direccion'=>$this->faker-> address(),
            'telefono'=>$this->faker->phoneNumber(),
            'departamento'=>$this->faker->country(),
            'municipio'=>$this->faker->state(),
            'foto'=>$this->faker->imageUrl(),
            'email'=>$this->faker->unique()->safeEmail(),
            'status'=> 'Solicitado'
        ];
    }
}
