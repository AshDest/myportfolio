<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Skill A',
                'proficiency' => 'Expert',
                'color' => 'Red',
                'sort_order' => 1,
            ],
            [
                'name' => 'Skill B',
                'proficiency' => 'Intermediate',
                'color' => 'Blue',
                'sort_order' => 2,
            ],
            [
                'name' => 'Skill C',
                'proficiency' => 'Beginner',
                'color' => 'Green',
                'sort_order' => 3,
            ],
            [
                'name' => 'Skill D',
                'proficiency' => 'Advanced',
                'color' => 'Yellow',
                'sort_order' => 4,
            ],
        ];

        foreach ($data as $item) {
            Skill::create($item);
        }
    }
}
