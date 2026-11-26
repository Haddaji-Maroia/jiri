<?php

namespace Database\Seeders;

use App\Models\Jiri;
use App\Models\User;
use Illuminate\Database\Seeder;

class JiriSeeder extends Seeder
{
    public function run(): void
    {
        $maroia = User::where('email', 'maroia@test.com')->first();
        $sara = User::where('email', 'sara@test.com')->first();

        Jiri::factory(5)->for($maroia)->create();
        Jiri::factory(2)->for($sara)->create();

        foreach (Jiri::all() as $jiri) {
            $contacts = $jiri->user->contacts;
            $projects = $jiri->user->projects;

            $students = $contacts->random(5);
            $jiri->contacts()->attach($students->pluck('id'), ['role' => 'evaluated']);

            $evaluators = $contacts->diff($students)->random(3);
            $jiri->contacts()->attach($evaluators->pluck('id'), ['role' => 'evaluator']);

            $jiri->projects()->attach($projects->random(2)->pluck('id'), ['percentage' => 50]);
        }
    }
}
