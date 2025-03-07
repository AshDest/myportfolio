<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Media;

class MediaLibrary extends Component
{
    use WithFileUploads;

    public $uploads = [];
    public $selectedMedia;

    public function updatedUploads()
    {
        $this->validate([
            'uploads.*' => 'image|max:5120' // 5MB
        ]);

        foreach ($this->uploads as $file) {
            Media::create([
                'name' => $file->getClientOriginalName(),
                'path' => $file->store('public/media'),
                'type' => $file->getMimeType(),
                'size' => $file->getSize()
            ]);
        }

        $this->uploads = [];
    }

    public function render()
    {
        return view('livewire.dashboard.media-library', [
            'media' => Media::latest()->paginate(12)
        ]);
    }
}
