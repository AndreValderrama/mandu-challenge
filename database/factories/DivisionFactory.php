<?php

namespace Database\Factories;

use App\Models\Division;
use Illuminate\Database\Eloquent\Factories\Factory;

class DivisionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Division::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text($maxNbChars = 40),
            'divsup' => $this->faker->word(),
            'colab' => $this->faker->numberBetween($min = 1, $max = 25),
            'numdiv' => $this->faker->numberBetween($min = 1, $max = 25),
            'level' => $this->faker->numberBetween($min = 1, $max = 25),
            'embajador' => $this->faker->name()
        ];
    }
}
