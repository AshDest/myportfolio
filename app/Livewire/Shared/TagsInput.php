<?php

namespace App\Livewire\Shared;

use Livewire\Component;

class TagsInput extends Component
{
    public $tags = [];
    public $newTag = '';

    public function addTag()
    {
        if ($this->newTag) {
            $this->tags[] = trim($this->newTag);
            $this->newTag = '';
            $this->emit('tagsUpdated', $this->tags);
        }
    }

    public function removeTag($index)
    {
        unset($this->tags[$index]);
        $this->tags = array_values($this->tags);
        $this->emit('tagsUpdated', $this->tags);
    }

    public function render()
    {
        return view('livewire.shared.tags-input');
    }
}
