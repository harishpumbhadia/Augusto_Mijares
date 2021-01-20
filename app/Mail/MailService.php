<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailService extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
  
    protected $mailSubject;
    protected $mailView;
    
    public function __construct($subject,$view)
    {
        $this->mailSubject = $subject;
        $this->mailView = $view;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        
        return $this->view($this->mailView)
                    ->subject($this->mailSubject);
    }
}