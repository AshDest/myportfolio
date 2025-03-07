<?php

namespace App\Livewire\Dashboard;

use App\Models\About;
use Livewire\Component;
use Livewire\WithFileUploads;
class AboutComponent extends Component
{
    use WithFileUploads;

    public $name, $title, $bio, $details, $photo, $social_links = [];

    public function mount()
    {
        $about = About::first();
        if ($about) {
            $this->fill($about->toArray());
            $this->social_links = json_decode($about->social_links, true) ?? [];
        }
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
            'title' => 'required',
            'bio' => 'required|max:200',
            'details' => 'required',
            'photo' => 'nullable|image|max:2048',
            'social_links.*.url' => 'sometimes|url'
        ]);

        if ($this->photo) {
            $validated['photo'] = $this->photo->store('public/about');
        }

        $validated['social_links'] = json_encode($this->social_links);

        About::updateOrCreate(['id' => 1], $validated);
        session()->flash('message', 'About section updated!');
    }
    public function render()
    {
        return view('livewire.dashboard.about-component');
    }
}
