<?php

namespace App\Livewire\Frontend;

use App\Models\Skill;
use Livewire\Component;

class SkillsSection extends Component
{
    public function render()
    {
        $skills = Skill::orderBy('sort_order')->get();
        return view('livewire.frontend.skills-section', compact('skills'));
        // return view('livewire.frontend.skills-section');
    }
}
