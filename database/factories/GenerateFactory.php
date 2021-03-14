<?php

namespace Database\Factories;

use App\Models\Generate;
use App\Models\Solicitude;
use Illuminate\Database\Eloquent\Factories\Factory;

class GenerateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Generate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $solicitud = Solicitude::all();

        $solicitud = Solicitude::select('id')->orderBy('id', 'desc')->get()->first();

        return [
            'email'=>$this->faker->unique()->email(),
            'password'=>$this->faker->password(),
            'user_id'=>$this->faker->unique()->randomElement([$solicitud->id])
        ];
    }
}
