<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        $maroia = User::where('email', 'maroia@test.com')->first();
        $sara = User::where('email', 'sara@test.com')->first();


        Contact::factory()->for($maroia)->create([
            'firstname' => 'Alessia', 'lastname' => 'Miele',
            'email' => 'ale@test.com', 'image' => 'ale.jpg',
        ]);
        Contact::factory()->for($maroia)->create([
            'firstname' => 'Elisa', 'lastname' => 'Jaswal',
            'email' => 'eli@test.com', 'image' => 'eli.jpg',
        ]);
        Contact::factory()->for($maroia)->create([
            'firstname' => 'Rabia', 'lastname' => 'Sarfraz',
            'email' => 'rabi@test.com', 'image' => 'rabi.jpg',
        ]);

        // contatti finti
        Contact::factory(30)->for($maroia)->create();
        Contact::factory(10)->for($sara)->create();
    }
}
