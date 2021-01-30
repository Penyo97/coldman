<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailformat extends Mailable
{
    use Queueable, SerializesModels;

    public $sendername;
    public $sendermail;
    public $sendernumber;
    public $sendertext;

    public function __construct($sendername,$sendermail,$sendernumber,$sendertext)
    {
        $this->sendername = $sendername;
        $this->sendermail = $sendermail;
        $this->sendernumber = $sendernumber;
        $this->sendertext = $sendertext;
    }


    public function build()
    {
        $subject = "Árajánlat";
        return $this->view('mail.mailformat')
        ->from($this->sendermail, $this->sendername)
        ->subject($subject)
        ->with(['mobile' => $this->sendernumber,'name' => $this->sendername, 'text' => $this->sendertext]);

    }
}
