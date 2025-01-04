<?php

namespace App\Livewire\Forms\Newsletter;


use App\Mail\NewsletterSubscription;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Page extends Component
{

    public string $email = '';

    public function render()
    {
        return view('livewire.forms.newsletter.page');
    }

    public function subscribeToNewsletter()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $data = [
            'email' => $this->email,
        ];

        Mail::to('jakub.zavacky@gmail.com')->send(new NewsletterSubscription($data));

        session()->flash('subscription', 'Email sent successfully!');
    }
}
