<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class applyMail extends Mailable
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

      return $this->from($this->data['email'], $this->data['firstName'])
    ->subject('Reactr Application')
    // ->message($this->data['skills'])
    ->view('email.apply')->with(['data', $this->data])->attach($this->data['resume'], [
      'as' => $this->data['firstName'] . '_' . $this->data['lastName'] . '_resume.' . $this->data['resume']->getClientOriginalExtension(),
      'mime' => $this->data['resume']->getMimeType()
    ]);

    }
}
