<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;


class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

  
    
    public function definition()
    {
     
        
        return [
            'email'=>$this->faker->unique()->email(),
            'password'=>$this->faker->password(),
            'user_id'=>$this->faker->unique()->randomElement([1,2,3,4,5,6,7,8,9,10])
        ];
    }
}
