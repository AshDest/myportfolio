<?php

namespace App\Livewire\Dashboard;

use App\Models\Skill;
use Livewire\Component;

class SkillComponent extends Component
{
    public $skills = [];
    public $name, $proficiency, $color;

    public function mount()
    {
        $this->skills = Skill::orderBy('sort_order')->get();
    }

    public function addSkill()
    {
        $this->validate([
            'name' => 'required',
            'proficiency' => 'required|numeric|min:1|max:100',
            'color' => 'required'
        ]);

        Skill::create([
            'name' => $this->name,
            'proficiency' => $this->proficiency,
            'color' => $this->color,
            'sort_order' => Skill::count() + 1
        ]);

        $this->reset(['name', 'proficiency', 'color']);
        $this->mount();
    }

    public function reorder($orderedIds)
    {
        Skill::setNewOrder($orderedIds);
        $this->mount();
    }
    public function render()
    {
        return view('livewire.dashboard.skill-component');
    }
}
