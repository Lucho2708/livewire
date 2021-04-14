<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Luis';

    public function mount($name)
    {
        $this->name = $name ;
    }

    public function updatedName()
    {
        $this->name = strtoupper($this->name);
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
