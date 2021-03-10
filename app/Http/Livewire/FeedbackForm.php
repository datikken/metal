<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class FeedbackForm extends Component
{
    public $name;
    public $email;
    public $tel;
    public $message;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'tel' => ['required', 'numeric', 'min:11'],
        'message' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveFeedback()
    {
        $validatedData = $this->validate();

        Contact::create($validatedData);

        $this->emit('feedbackCollected');
    }

    public function render()
    {
        return view('livewire.feedback-form');
    }
}
