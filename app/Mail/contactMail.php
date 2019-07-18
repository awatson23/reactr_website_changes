<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
    * The order instance.
    *
    *
    */
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

      return $this->from($this->data['email'], $this->data['name'])
    ->subject($this->data['interest'])
    ->view('email.contact')->with(['data', $this->data]);

      // return $this->view('email.contact')->with([
      //         'name' => $this->name,
      //         'email' => $this->email,
      //         'interest' => $this->interest,
      //         'message' => $this->message,
      //     ]);
    }
}
