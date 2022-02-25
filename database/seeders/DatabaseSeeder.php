<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\user::create(
            [
                'name' => "Hexa",
                'email' => "hexa@gmail.com",
                'password' => "12345678",
            ]
            );
        \App\Models\expence::factory(10)->create();
    }
}
