<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;
use App\Models\About;
use App\Models\Skill;
use App\Models\Project;

class ShowPortfolio extends Component
{
    public function render()
    {
        return view('livewire.portfolio.show-portfolio', [
            'about' => About::first(),
            'skills' => Skill::all(),
            'projects' => Project::all()
        ]);
    }
}
