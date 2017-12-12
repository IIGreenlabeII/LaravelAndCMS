<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="{{ $tarieven->meta_description }}">
  <meta name="keywords" content="{{ $tarieven->meta_keywords }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
  <title>{{ $tarieven->title }}</title>
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
  			<h1>{{ $tarieven->title }}</h1>
        @if (!empty($tarieven->image))
          <div class="wrapper-content-img">
            <img src="storage/{{ $diensten->image }}">
          </div>
        @endif
  			<p>{!! $tarieven->body !!}</p>
    </div>
    <div class="container">
    <div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">€75,- /mnd</th>
            <th scope="col">€99,- /mnd</th>
            <th scope="col">€135,- /mnd</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Verwerken administratie</td>
            <td>Verwerken administratie</td>
            <td>Verwerken administratie</td>
          </tr>
          <tr>
            <td>BTW & IB aangifte</td>
            <td>BTW & IB aangifte</td>
            <td>Verzorgen van fiscale aangiften</td>
          </tr>
          <tr>
            <td><12 facturen p.m.</td>
            <td><25 facturen p.m.</td>
            <td><40 facturen p.m.</td>
          </tr>
          <tr>
            <td>Jaarrekening samenstellen</td>
            <td>Jaarrekening samenstellen</td>
            <td>Jaarrekening samenstellen en deponeren</td>
          </tr>
          <tr>
            <td>Proactief advies</td>
            <td>Proactief advies</td>
            <td>Proactief advies</td>
          </tr>
          <tr>
            <td>Eerste hulp voor starters</td>
            <td>Uitgebreid adviesgesprek</td>
            <td>Uitgebreid adviesgesprek</td>
          </tr>
          <tr>
            <td>Periodieke rapportage</td>
            <td>Debiteuren/Crediteuren bewaking</td>
            <td>Debiteuren/Crediteuren bewaking</td>
          </tr>
          <tr>
            <td>€10,- per loonstrook</td>
            <td>Periodieke rapportage</td>
            <td>Periodieke rapportage</td>
          </tr>
          <tr>
            <td> </td>
            <td>€10,- per loonstrook</td>
            <td>24/7 inzicht in administratie</td>
          </tr>
          <tr>
            <td> </td>
            <td> </td>
            <td>€10,- per loonstrook</td>
            </tr>
        </tbody>
      </table>
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
</body>
</html>
