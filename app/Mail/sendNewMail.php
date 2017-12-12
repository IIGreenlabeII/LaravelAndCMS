<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class sendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        return $this->view('mail',
        [
          'voornaam'=>$request->voornaam,
          'achternaam'=>$request->achternaam,
          'bedrijfsnaam'=>$request->bedrijfsnaam,
          'email'=>$request->email,
          'telephone'=>$request->telephone,
          'rechtvorm'=>$request->rechtvorm,
          'inkomen'=>$request->inkomen,
          'loondienst'=>$request->loondienst,
          'bericht'=>$request->bericht,
        ])->to('anbbeheer@gmail.com');
    }
}
