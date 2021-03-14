<?php

namespace Database\Factories;

use App\Models\Dpi;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Solicitude;

class DpiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dpi::class;

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
            'dpi'=>$this->faker->unique()->numerify('#############'),
            'user_id'=>$this->faker->randomElement([$solicitud->id])
        ];
    }
}
