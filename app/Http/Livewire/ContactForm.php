<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function updated()
    {
        $validatedData = Validator::make(
            [
                'name'    => $this->name,
                'email'   => $this->email,
                'message' => $this->message,
            ],
            [
                'name'    => 'required',
                'email'   => 'required|email',
                'message' => 'required',
            ]
        );

        if ($validatedData->fails()) {
            return $this->alert('error', $validatedData->errors()->first());
        }
    }

    public function submit()
    {
        $validatedData = Validator::make(
            [
                'name'    => $this->name,
                'email'   => $this->email,
                'message' => $this->message,
            ],
            [
                'name'    => 'required',
                'email'   => 'required|email',
                'message' => 'required',
            ]
        );

        if ($validatedData->fails()) {
            return $this->alert('error', $validatedData->errors()->first());
        }

        $data = [
            'name'    => $this->name,
            'email'   => $this->email,
            'message' => $this->message,
        ];
        Mail::to($this->email)->send(new \App\Mail\ContactForm($data));
        $this->reset();
        return $this->alert('success', 'Mail sent successfully, wait for the reply!');
    }
}
