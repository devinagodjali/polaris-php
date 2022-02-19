<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMailable;
use Illuminate\Mail\Mailable;
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

    public $loading;
    public $isSuccess;

    protected $rules = [
        'about' => '',
        'firstName' => '',
        'lastName' => '',
        'email' => 'required|email',
        'phone' => 'required',
        'company' => '',
    ];

    public function mount()
    {
        $this->loading = false;
        $this->isSuccess = false;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $this->loading = true;
        $contact = $this->validate($this->rules);

        Mail::to('info@polarisfurniture.id')->send(
            new ContactFormMailable($contact)
        );

        $this->isSuccess = true;

        $this->resetForm();
        $this->loading = false;
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
