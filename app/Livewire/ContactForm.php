<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $successMessage;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        Mail::to('your-email@example.com')->send(new ContactMail([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]));

        $this->successMessage = 'Message successfully sent!';

        // Optionally reset the form fields
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

