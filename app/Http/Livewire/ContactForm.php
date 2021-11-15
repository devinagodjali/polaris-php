<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $about;
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $company;

    public $successMessage;

    protected $rules = [
        'about' => '',
        'firstName' => '',
        'lastName' => '',
        'email' => 'required|email',
        'phone' => 'required',
        'company' => '',
    ];

    // public function mount()
    // {
    //     $this->about = '';
    //     $this->firstName = '';
    //     $this->lastName = '';
    //     $this->email = '';
    //     $this->phone = '';
    //     $this->company = '';
    // }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact = $this->validate();
        Mail::to('contact@polarisfurniture.id')->send(
            new ContactFormMailable($contact)
        );

        $this->successMessage = "thank you for your message";

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->about = '';
        $this->firstName = '';
        $this->lastName = '';
        $this->email = '';
        $this->phone = '';
        $this->company = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
