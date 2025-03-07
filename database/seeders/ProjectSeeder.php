<?php

namespace Database\Seeders;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Project Alpha',
                'caption' => 'An innovative project.',
                'details' => 'Detailed description of Project Alpha.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL'],
                'image' => 'project_alpha.jpg',
                'link' => 'https://example.com/project-alpha',
                'start_date' => Carbon::parse('2023-01-01'),
                'end_date' => Carbon::parse('2023-06-30'),
                'featured' => true,
            ],
            [
                'title' => 'Project Beta',
                'caption' => 'A groundbreaking project.',
                'details' => 'Detailed description of Project Beta.',
                'technologies' => ['React', 'Node.js', 'PostgreSQL'],
                'image' => 'project_beta.jpg',
                'link' => 'https://example.com/project-beta',
                'start_date' => Carbon::parse('2023-02-15'),
                'end_date' => Carbon::parse('2023-08-20'),
                'featured' => false,
            ],
            // Add more entries as needed
        ];

        foreach ($data as $item) {
            Project::create($item);
        }
    }
}
