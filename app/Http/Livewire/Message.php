<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Message extends Component
{
    public $name, $email, $phone, $message, $subject;

    function refreshInputs()
    {
        $this->name = '';
        $this->subject = '';
        $this->phone = '';
        $this->message = '';
        $this->email = '';
    }

    function save()
    {
        $data = $this->validate([
            'name' => 'required',
            'phone' => 'required|integer',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required|min:20',
        ]);

        $done = Contact::create($data);
        // Mail::to('registrar@aum.edu.ng')->cc('info@aum.edu.ng')->send(new ContactMail($done));
        $this->refreshInputs();
        if ($done) {
            session()->flash('success', 'Message sent successfully');
        }
    }

    public function render()
    {
        return view('livewire.message');
    }
}