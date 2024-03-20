<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id' => 1,
            'name' => 'NadetDev',
            'email' => 'nadetdev@gmail.com',
            'password'=> bcrypt('P@ssword01'),
        ]);

        Note::factory(50)->create([

        ]);
    }
}
