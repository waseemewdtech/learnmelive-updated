<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientSpecialistDisputeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->data;
        if($data['file']!=''){
            return $this->from(config('app.mail_from'))->subject($data['subject'])->view('emails.frontend.disputes.client_specialist_mail',compact('data'))->attach($data['file']);
        }
        return $this->from(config('app.mail_from'))->subject($data['subject'])->view('emails.frontend.disputes.client_specialist_mail',compact('data'));
    }
}
