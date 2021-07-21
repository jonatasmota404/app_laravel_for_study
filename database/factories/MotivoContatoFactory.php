<?php

namespace Database\Factories;

use App\Models\MotivoContato;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotivoContatoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MotivoContato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'motivo_contato' => $this->faker->word() // palavra
        ];
    }
}
