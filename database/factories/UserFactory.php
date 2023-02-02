<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
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

        // genera registros sin parar
        return [
            'name' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make(Str::random(20)),
            'imagen' => 'avatar.png',
            'rol' => 'alumno',
            'id_grupo' => random_int(1,10),
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ];

    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
