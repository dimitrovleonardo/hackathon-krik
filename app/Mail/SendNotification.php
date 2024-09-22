<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $messageContent;
    protected $messageSubject;
    /**
     * Create a new message instance.
     */
    public function __construct($messageContent, $messageSubject)
    {
        $this->messageContent = $messageContent;
        $this->messageSubject = $messageSubject;
    }

    public function build()
    {
        return $this->subject($this->messageSubject)
            ->view('mail.notificatiion')
            ->with([
                'messageContent' => $this->messageContent,
            ]);
    }
}
