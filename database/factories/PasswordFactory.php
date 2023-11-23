<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class PasswordFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'service_name' => $this->faker->unique()->word,
            'password' => static::$password ??= Hash::make('password'),
        ];
    }
}
