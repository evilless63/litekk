<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { {
        $mailView = $this->view('emails/sendemail')
        ->subject($this->data['title'])
        ->with([
            'data' => $this->data
        ]);
            return $this->data['filepath'] !== '' ? 
            $mailView->attach(
                    $this->data['filepath']->getRealPath(),
                    [
                        'as' => $this->data['filepath']->getClientOriginalName(),
                        'mime' => $this->data['filepath']->getClientMimeType(),
                    ]
                ) : $mailView;
        }
    }
}
