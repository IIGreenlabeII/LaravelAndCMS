<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class sendMail extends Mailable
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
    public function build(Request $request)
    {
      $ldate = " uploaded on: ".date('d-m-Y H:i:s');
      $file = request()->file('bestand');
      $file->storeAs(null, $file->getClientOriginalName(), 'public_uploads');
      $file->storeAs('public_uploads', $file->getClientOriginalName().$ldate);

        return $this->view('mailClient',
        [
          'bedrijfsnaam'=>$request->bedrijfsnaam,
          'onderneming'=>$request->onderneming,
        ])->to('anbbeheer@gmail.com')->attach($file->getClientOriginalName(), [
            'as' => $file->getClientOriginalName(),
        ]);
    }
}
