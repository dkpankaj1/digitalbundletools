<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $contactUs;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->contactUs = $data;
    }

    public function build()
    {
        return $this->from('contact@digitalbundletools.in')
                    ->subject('User Query/Message')
                    ->view('emails.contact_us')
                    ->with('data', $this->contactUs);
    }
}
