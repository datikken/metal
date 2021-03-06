<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $tel;
    public $class;

    protected $rules = [
        'name' => ['required', 'min:6'],
        'tel' => ['required', 'numeric', 'min:11'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveContact()
    {
        $validatedData = $this->validate();

        Contact::create($validatedData);

        $this->emit('contactCollected');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
