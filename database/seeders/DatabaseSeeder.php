<?php

namespace Database\Seeders;

use App\Models\Password;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
         User::factory(10)->create();
         Password::factory(30)->create();
    }
}
