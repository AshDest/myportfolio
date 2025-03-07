<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name' => 'John Doe',
            'title' => 'Developer',
            'bio' => 'A brief bio about John Doe.',
            'details' => 'Detailed information about John Doe goes here.',
            'photo' => 'john_doe.jpg',
            'social_links' => json_encode([
                'twitter' => 'https://twitter.com/johndoe',
                'facebook' => 'https://facebook.com/johndoe'
            ]),
        ]);
    }
}
