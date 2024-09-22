<?php

namespace App\Jobs;

use App\Mail\SendNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNewsletterEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $newsletter;
    protected $subject;
    protected $message;

    /**
     * Create a new job instance.
     */
    public function __construct($newsletter, $subject, $message)
    {
        $this->newsletter = $newsletter;
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Send the email to the current newsletter subscriber
        Mail::to($this->newsletter->email)->send(new SendNotification($this->message, $this->subject));
    }
}
