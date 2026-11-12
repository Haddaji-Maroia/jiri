<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {

        Contact::create([
            'firstname' => 'Alessia',
            'lastname' => 'Miele',
            'email' => 'ale@test.com',
            'image' => 'ale.jpg',
        ]);

        Contact::create([
            'firstname' => 'Elisa',
            'lastname' => 'Jaswal',
            'email' => 'eli@test.com',
            'image' => 'eli.jpg',
        ]);

        Contact::create([
            'firstname' => 'Rabia',
            'lastname' => 'Sarfraz',
            'email' => 'rabi@test.com',
            'image' => 'rabi.jpg',
        ]);
    }
}
