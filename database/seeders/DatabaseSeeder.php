<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Jiri;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create(['name' => 'Maroia', 'email' => 'maroia@test.com']);
        User::factory()->create(['name' => 'Alessia', 'email' => 'alessia@test.com']);
        User::factory()->create(['name' => 'Sara', 'email' => 'sara@test.com']);

        $this->call([
            ContactSeeder::class,
            ProjectSeeder::class,
            JiriSeeder::class,
        ]);
    }
}
