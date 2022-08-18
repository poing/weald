<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Weald\Test\Control\Models\BaseLineAlpha;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\General>
 */
class BaseLineAlphaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BaseLineAlpha::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'value' => fake()->sentence(6),
        ];
    }
}
