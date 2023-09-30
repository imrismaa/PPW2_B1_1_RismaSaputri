<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarangModel>
 */
class BarangModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->word,
            'harga' => $this->faker->numberBetween(50000, 300000),
            'stok' => $this->faker->randomNumber(),
            'id_suplier' => $this->faker->numerify('SU-####'),
        ];
    }
}
