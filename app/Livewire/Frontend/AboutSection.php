<?php

namespace App\Livewire\Frontend;

use App\Models\About;
use Livewire\Component;

class AboutSection extends Component
{
    public function render()
    {
        $about = About::first();
        $socialLinks = json_decode($about->social_links, true);
        return view('livewire.frontend.about-section', compact('about', 'socialLinks'));
    }
}
