<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nis" => fake()->unique()->randomNumber(6, true),
            "nama" => fake()->name(),
            "alamat" => fake()->address(),
            "kelas" => fake()->randomElement(['10 pplg', '11 pplg', '10 dkv', '11 dkv'])
        ];
    }
}
