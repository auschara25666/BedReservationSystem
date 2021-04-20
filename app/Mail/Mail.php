<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;
    public  $title;
    public $user_detail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title,$user_detail)
    {
        $this->title = $title;
        $this->user_detail = $user_detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->title)
        ->view('mail.mail');
    }
}
