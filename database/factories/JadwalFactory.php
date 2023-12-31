<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode' => fake()->kode(),
            'matkul' => fake()->matkul(),
            'dosen' => fake()->dosen(),
            'jam' => fake()->jam(),
            'kelas' => fake()->kelas()
        ];
    }
}
