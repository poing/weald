<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\General>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
			'name' => fake()->name,
			'email' => fake()->unique()->safeEmail,
			'password' => $password ?: $password = bcrypt('secret'),
			'remember_token' => str_random(10),        ];
    }
    
// 	$factory->define(App\User::class, function (Faker $faker) {
// 		static $password;
// 
// 		return [
// 			'name' => $faker->name,
// 			'email' => $faker->unique()->safeEmail,
// 			'password' => $password ?: $password = bcrypt('secret'),
// 			'remember_token' => str_random(10),
// 		];
// 	});
//	General::factory()->make(['foo' => 'bar']);

    
}

