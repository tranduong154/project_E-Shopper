<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Auth;
class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     * 
     */
    private $data = [];
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function build(){
        $email = Auth::user()->email;
        // dd($email);
        return $this->from( $email , "$email")
        ->subject($this->data['subject'])
        ->view("emails.index")->with("data", $this->data);
    }

   
}
