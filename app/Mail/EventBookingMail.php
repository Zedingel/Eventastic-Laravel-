<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data; // Store the data for use in the email view
    }

    public function build()
    {
        return $this->subject($this->data['subject'])
                    ->view('emails.event_booking') // Specify the view to use
                    ->with([
                        'content' => $this->data['content'], // Pass data to the view
                    ]);
    }
}
