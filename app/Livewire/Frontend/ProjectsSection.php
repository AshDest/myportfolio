<?php

namespace App\Livewire\Frontend;

use App\Models\Project;
use Livewire\Component;

class ProjectsSection extends Component
{
    public function render()
    {
        $projects = Project::orderBy('sort_order')->get();
        return view('livewire.frontend.projects-section', compact('projects'));
        // return view('livewire.frontend.projects-section');
    }
}
