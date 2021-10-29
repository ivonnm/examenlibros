<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Libro::class;
    public function definition()
    {
        return [
            'titulo'=> $this->faker->sentence(),
            'autor'=> $this->faker->sentence(),
            'editorial'=> $this->faker->sentence(),
            'fecha_de_publicacion'=> $this->faker->sentence(),
            'n_paginas'=> $this->faker->sentence()
        ];
    }
}
