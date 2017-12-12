@php

@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="{{ $form->meta_description }}">
  <meta name="keywords" content="{{ $form->meta_keywords }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
  <title>{{ $form->title }}</title>
  <link rel="icon" href="{!! asset('favicon.ico') !!}"/>

  <!-- Stylesheet CSS -->
  <link rel="stylesheet" type="text/css" href="{!! asset('css/stylesheet.css') !!}" />
  <link rel="stylesheet" media="(max-width: 760)" href="{!! asset('css/stylesheet.css') !!}" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
</head>

<body>
  <div class="small-banner"></div>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="logo hidden-sm hidden-xs">
        <a href="/home"><img src="{{ asset('images/logo.png') }}" alt="AnB logo"></a>
      </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-moblie-menu" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-moblie-menu">
        <ul class="nav navbar-nav">
          <li><a href="home">Home</a></li>
          <li><a href="over-ons">Over Ons</a></li>
          <li><a href="diensten">Diensten</a></li>
          <li><a href="tarieven">Tarieven</a></li>
          <li><a href="formulier">Formulier</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="wrapper">
    <div class="wrapper-content">
  			<h1>{{ $form->title }}</h1>
        @if ( session()->has('message') )
          <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
        @endif
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        @if (!empty($form->image))
          <div class="wrapper-content-img">
            <img src="storage/{{ $form->image }}">
          </div>
        @endif
  			<p>{!! $form->body !!}</p>
        <div class="buttons">
          <p>
            Bent U al een klant van ons?
          </p>
          <button class="form-button-client">
            <p>Ja</p>
          </button>
          <button class="form-button">
            <p>Nee</p>
          </button>
        </div>
        <div class="form-client">
          <p>
            <form class="form-row align-items-center" method="post" action="clients" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <label for="bedrijfsnaam">Bedrijfsnaam *</label>
              <input type="text" name="bedrijfsnaam" class="form-control mb-2 mb-sm-0" placeholder="Voer uw bedrijfsnaam in">
              <label for="onderneming">Selecteer de dienst die wij moeten uitvoeren *</label>
              <select class="form-control" name="onderneming">
                <option value="vraag" disabled selected>Maak uw keuze</option>
                <optgroup label="Zakelijk">
                  <option value="Zakelijk: Bedrijfsadministratie">Bedrijfsadministratie</option>
                  <option value="Zakelijk: Aangifte Omzetbelasting">Aangifte Omzetbelasting</option>
                  <option value="Zakelijk: Jaarrekening">Jaarrekening</option>
                  <option value="Zakelijk: Aangifte Inkomstenbelasting">Aangifte Inkomstenbelasting</option>
                  <option value="Zakelijk: Aangifte Vennootschapsbelasting">Aangifte Vennootschapsbelasting</option>
                  <option value="Zakelijk: Persooneel- en salarisadministratie">Persooneel- en salarisadministratie</option>
                  <option value="Zakelijk: Bedrijfskundig Advies">Bedrijfskundig Advies</option>
                  <option value="Zakelijk: Fiscaal Advies">Fiscaal Advies</option>
                </optgroup>
                <optgroup label="Particulier">
                  <option value="Particulier: Aangifte Inkomstenbelasting">Aangifte Inkomstenbelasting</option>
                  <option value="Particulier: Toeslagen">Toeslagen</option>
                </optgroup>
              </select>
              <label for="file">Selecteer uw bestand *</label>
              <input type="file" id ="uploaded_file" name="bestand" accept="*">
              <button type="submit" class="btn send btn-primary center">Verstuur mail</button>
            </form>
          </p>
        </div>
        <div class="form">
          <form class="form-row align-items-center" method="post" action="newClients">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label for="voornaam">Voornaam *</label>
            <input type="text" name="voornaam" class="form-control mb-2 mb-sm-0" placeholder="Voer uw voornaam in">
            <label for="achternaam">Achternaam *</label>
            <input type="text" name="achternaam" class="form-control mb-2 mb-sm-0" placeholder="Voer uw achternaam in">
            <label for="bedrijfsnaam">Bedrijfsnaam *</label>
            <input type="text" name="bedrijfsnaam" class="form-control mb-2 mb-sm-0" placeholder="Voer uw bedrijfsnaam in">
            <label for="email">Email *</label>
            <input type="text" name="email" class="form-control mb-2 mb-sm-0" placeholder="Voer uw emailadres in">
            <label for="telephone">Telefoonnummer *</label>
            <input type="text" name="telephone" class="form-control mb-2 mb-sm-0" placeholder="Voer uw telefoonnummer in">
            <label for="onderneming">Welke rechtsvorm heeft uw onderneming? *</label>
            <select class="form-control" name="rechtvorm">
              <option value="vraag" disabled selected>Maak uw keuze</option>
              <option value="Eenmanszaak">Eenmanszaak</option>
              <option value="ZZP">ZZP</option>
              <option value="Vennootschap onder firma">Vennootschap onder firma</option>
              <option value="Maatschap">Maatschap</option>
              <option value="Commanditaire vennootschap">Commanditaire vennootschap</option>
              <option value="Besloten vennootschap">Besloten vennootschap</option>
              <option value="Naamloze vennootschap">Naamloze vennootschap</option>
              <option value="Cooperatie en onderlinge waarborgmaatschappij">Cooperatie en onderlinge waarborgmaatschappij</option>
              <option value="Stichting">Stichting</option>
              <option value="Vereniging">Vereniging</option>
            </select>
            <label for="inkomen">Hoeveel in/verkoop facturen heeft de onderneming ongeveer per jaar? *</label>
            <select class="form-control" name="inkomen">
              <option value="vraag" disabled selected>Maak uw keuze</option>
              <option value="0-100">0-100</option>
              <option value="100-300">100-300</option>
              <option value="300+">300+</option>
            </select>
            <label for="loondienst">Heeft uw onderneming medewerkers in loondienst? *</label>
            <select class="form-control" name="loondienst">
              <option value="vraag" disabled selected>Maak uw keuze</option>
              <option value="Ja">Ja</option>
              <option value="Nee">Nee</option>
            </select>
            <label for="bericht">Bericht *</label>
            <textarea class="form-control" name="bericht" rows="8" placeholder="Voer uw bericht in"></textarea>
            <button type="submit" class="btn send btn-primary center">Verstuur mail</button>
          </form>
        </div>
    </div>
  </div>

  <div class="footer">
    <div class="footer-content">
      <div class="footer-content-left col-xs-6 col-sm-4 col-md-4 col-lg-4">
        <ul>
          <p>Zakelijk</p>
          <li><a href="bedrijfsadministratie">Bedrijfsadministratie</a></li>
          <li><a href="aangifte-omzetbelasting">Aangifte Omzetbelasting</a></li>
          <li><a href="jaarrekening">Jaarrekening</a></li>
          <li><a href="aangifte-inkomstenbelasting">Aangifte Inkomstenbelasting</a></li>
          <li><a href="aangifte-vennootschapsbelasting">Aangifte Vennootschapsbelasting</a></li>
          <li><a href="persooneel-en-salarisadministratie">Personeel- en salarisadministratie</a></li>
          <li><a href="bedrijfskundig-advies">Bedrijfskundig Advies</a></li>
          <li><a href="fiscaal-advies">Fiscaal Advies</a></li>
        </ul>
      </div>
      <div class="footer-content-mid col-xs-6 col-sm-4 col-md-4 col-lg-4">
        <ul>
          <p>Particulier</p>
          <li><a href="particulier-aangifte-inkomstenbelasting">Aangifte Inkomstenbelasting</a></li>
          <li><a href="toeslagen">Toeslagen</a></li>
        </ul>
      </div>
      <div class="footer-content-right col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <ul>
          <p>Contact</p>
          <li class="contact-info">Postadres: Louis Couperusplaats 169</li>
          <li class="contact-info">Telefoonnummer 1: 010 2542971</li>
          <li class="contact-info">Telefoonnummer 2: 06 14997400</li>
          <li class="contact-info">Email: info@snbfinance.nl</li>
          <li class="contact-info">KvK nummer: 69874654</li>
          <li class="contact-info">BTW nummer: NL201462473b01</li>
        </ul>
      </div>
      <div class="social-logos">
        <a href="https://www.instagram.com/anb_administratie/" class="instagram-logo" target="_blank"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
        <a href="https://www.facebook.com/ANB-Administratie-Consultancy-501504673556676/" class="facebook-logo" target="_blank"><img src="{{ asset('images/facebook.png') }}" alt="Instagram"></a>
      </div>
    </div>
    <div class="footer-small-banner"></div>
  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function(){
    $(".form").hide();
    $('.form-client').hide();

      $(".form-button").click(function(){
        $(".form").slideToggle();
        $('.form-client').slideUp();
      });
      $(".form-button-client").click(function(){
        $(".form-client").slideToggle();
        $(".form").slideUp();
      });
    });
  </script>
</body>
</html>
