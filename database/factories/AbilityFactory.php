<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

 
class AbilityFactory extends Factory
{
 
    public function definition(): array
    {
        return [
            'ability_name' => fake()->name(),
            'ability_description' => fake()->name(),
            'url'=>fake()->url(),
            // 'activation' => fake()->randomElements(['0', '1',]),
             
            // 'module_id' => fake()->randomElements(1122,1123,1124,1125),
            'description' => fake()->name(),
             
        ];
    }
}
