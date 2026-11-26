<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $maroia = User::where('email', 'maroia@test.com')->first();
        $sara = User::where('email', 'sara@test.com')->first();

        Project::factory(10)->for($maroia)->create();
        Project::factory(4)->for($sara)->create();
    }
}
