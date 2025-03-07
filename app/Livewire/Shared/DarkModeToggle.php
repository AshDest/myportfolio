<?php

namespace App\Livewire\Shared;

use Livewire\Component;

class DarkModeToggle extends Component
{
    public $darkMode = false;

    public function mount()
    {
        $this->darkMode = session()->get('darkMode', false);
    }

    public function toggle()
    {
        $this->darkMode = !$this->darkMode;
        session()->put('darkMode', $this->darkMode);
        $this->dispatch('darkModeToggled', $this->darkMode);
    }

    public function render()
    {
        return view('livewire.shared.dark-mode-toggle');
    }
}
