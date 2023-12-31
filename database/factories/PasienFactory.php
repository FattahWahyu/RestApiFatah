<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');

        return [
            'nama' => $faker->name,
            'no_rm' => $faker->numerify('#########'),
            'tgl_lahir' => $faker->date('Y-m-d', '2002-01-20'),
            'no_telp' => $faker->phoneNumber,
            'alamat' => $faker->address,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}