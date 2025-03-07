<?php

namespace App\Livewire\Dashboard;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;
class ProjectComponent extends Component
{
    use WithFileUploads;

    public $projects, $title, $caption, $details, $technologies = [];
    public $image, $link, $start_date, $end_date, $featured;

    public function mount()
    {
        $this->projects = Project::latest()->get();
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'caption' => 'required|max:120',
            'details' => 'required',
            'technologies' => 'required|array|min:1',
            'image' => 'required|image|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date'
        ]);

        $project = Project::create([
            'title' => $this->title,
            'caption' => $this->caption,
            'details' => $this->details,
            'technologies' => $this->technologies,
            'image' => $this->image->store('public/projects'),
            'link' => $this->link,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'featured' => $this->featured ?? false
        ]);

        $this->reset();
        $this->mount();
    }
    public function render()
    {
        return view('livewire.dashboard.project-component');
    }
}
