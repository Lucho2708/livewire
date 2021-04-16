<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class SayHi extends Component
{
    public $contact;

    protected $listeners = ['foo'=>'$refresh'];

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.say-hi');
    }

    public function emitFoo()
    {
        $this->emitUp('foo');
    }
}
