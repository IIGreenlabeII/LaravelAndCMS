<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendMail;
use App\Mail\sendNewMail;
use Illuminate\Support\Facades\View;


class mailController extends Controller
{
    // Sends the email to the new clients
    public function newClients(Request $request)
    {
      $this->validate($request, [
          'voornaam' => 'required|min:3',
          'achternaam' => 'required|min:3',
          'bedrijfsnaam' => 'required|min:3',
          'email' => 'required|email',
          'telephone' => 'required|integer|min:10',
          'rechtvorm' => 'required',
          'inkomen' => 'required',
          'loondienst' => 'required',
          'bericht' => 'required',
      ]);

      Mail::send(new sendNewMail());
      return redirect()->back()->with('message', 'Mail is succesvol verstuurd.');
    }

    // Sends the email to the existing clients
    public function clients(Request $request)
    {
      $this->validate($request, [
          'bedrijfsnaam' => 'required|min:3',
          'onderneming' => 'required',
          'bestand' => 'required',
      ]);

      Mail::send(new sendMail());
      return redirect()->back()->with('message', 'Mail is succesvol verstuurd.');
    }
}
