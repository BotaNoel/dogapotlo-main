<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create(['name' => 'user1', 'email' => 'user1@example.com', 'password' => bcrypt('test123'), 'role' => 'user']);
        User::factory()->create(['name' => 'admin1', 'email' => 'admin1@example.com', 'password' => bcrypt('test123'), 'role' => 'admin']);

        User::factory(48)->create();

        Book::factory(100)->create();
    }
}
