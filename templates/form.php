
<html lang="pl"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rozpoznanie cukrzycy typu I u młodych ludzi</title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="static/css/theme.css" rel="stylesheet">

	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Moja Aplikacja</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Strona Główna</a></li>
            <li><a href="./form.php">Formularz</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

<div class="page-header">
  <h1>Rozpoznanie cukrzycy typu I u młodych ludzi</h1>
</div>
<form role="page1" action="baza.php" method="post">
    <div class="form-group">
        <p><label for="gender">Płeć:</label><br><br>
        <label><input type="radio" class="radio-inline" id="gender" name="gender" value="kobieta" required> Kobieta</label><br>
        <label><input type="radio" class="radio-inline" id="gender" name="gender" value="mezczyzna" required> Mężczyzna</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="age">Wiek:</label><br><br>
        <label><input type="radio" class="radio-inline" id="age" name="age" value="<18" required> mniej niż 18 lat</label><br>
        <label><input type="radio" class="radio-inline" id="age" name="age" value="19-35" required> 19 - 35 lat</label><br>
        <label><input type="radio" class="radio-inline" id="age" name="age" value="36-50" required> 36 - 50 lat</label><br>
        <label><input type="radio" class="radio-inline" id="age" name="age" value="51-65" required> 51 - 65 lat</label><br>
        <label><input type="radio" class="radio-inline" id="age" name="age" value="65<" required> powyżej 65 lat</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="height">Pana/Pani wzrost wynosi w cm:</label><br><br>
        <input type="number" class="form-control" id="height" name="height" min="50" max="230" required></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="weight">Pana/Pani waga wynosi w kg: </label><br><br>
        <input type="number" class="form-control" id="weight" name="weight" min="10" max="200" required></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="activity">Pana/Pani aktywność zawodowa:</label><br><br>
        <label><input type="radio" class="radio-inline" id="activity" name="activity" value="praca umyslowa" required> Praca umysłowa</label><br>
        <label><input type="radio" class="radio-inline" id="activity" name="activity" value="praca fizyczna" required> Praca fizyczna</label><br>
        <label><input type="radio" class="radio-inline" id="activity" name="activity" value="uczen/student" required> Uczeń/student</label><br>
        <label><input type="radio" class="radio-inline" id="activity" name="activity" value="emeryt/rencista" required> Emeryt/rencista</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="sport">Jak często w czasie wolnym uprawia Pan/Pani sport?</label><br><br>
        <label><input type="radio" class="radio-inline" id="sport" name="sport" value="1 w miesiacu" required> 1 w miesiącu</label><br>
        <label><input type="radio" class="radio-inline" id="sport" name="sport" value="2-3 razy w miesiacu" required> 2-3 razy w miesiącu</label><br>
        <label><input type="radio" class="radio-inline" id="sport" name="sport" value="4-6 razy w miesiacu" required> 4-6 razy w miesiącu</label><br>
        <label><input type="radio" class="radio-inline" id="sport" name="sport" value="czesciej niz 6 razy w miesiacu" required> Częściej niż 6 razy w miesiącu</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="meals">Ile posiłków w ciągu dnia Pan/Pani spożywa?</label><br><br>
        <label><input type="radio" class="radio-inline" id="meals" name="meals" value="1-3" required> 1-3 posiłki</label><br>
        <label><input type="radio" class="radio-inline" id="meals" name="meals" value="4-5" required> 4-5 posiłków</label><br>
        <label><input type="radio" class="radio-inline" id="meals" name="meals" value="6<" required> 6 posiłków i więcej</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="opinion">Czy uważa Pan/Pani, że zdrowo się odżywia?</label><br><br>
        <label><input type="radio" class="radio-inline" id="opinion" name="opinion" value="tak" required> Tak</label><br>
        <label><input type="radio" class="radio-inline" id="opinion" name="opinion" value="nie" required> Nie</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="9">Czy w ciągu dnia zdarzają się Panu/Pani powtarzające się uczucia senności i apatii?</label><br><br>
        <label><input type="radio" class="radio-inline" id="9" name="9" value="rzadko" required> Rzadko</label><br>
        <label><input type="radio" class="radio-inline" id="9" name="9" value="czesto" required> Często</label><br>
        <label><input type="radio" class="radio-inline" id="9" name="9" value="bardzo czesto" required> Bardzo często</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="10">Czy uważa Pan/Pani, że cierpi na nadmierne pragnienie?</label><br><br>
        <label><input type="radio" class="radio-inline" id="10" name="10" value="tak" required> Tak</label><br>
        <label><input type="radio" class="radio-inline" id="10" name="10" value="nie" required> Nie</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="11">Jak  często odczuwa Pan/Pani suchość w gardle?</label><br><br>
        <label><input type="radio" class="radio-inline" id="11" name="11" value="rzadko" required> Rzadko</label><br>
        <label><input type="radio" class="radio-inline" id="11" name="11" value="czasami" required> Czasami</label><br>
        <label><input type="radio" class="radio-inline" id="11" name="11" value="czesto" required> Często</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="12">Jak ocenia Pan/Pani kondycję Pani/Pana skóry?</label><br><br>
        <label><input type="radio" class="radio-inline" id="12" name="12" value="normalna" required> Normalna</label><br>
        <label><input type="radio" class="radio-inline" id="12" name="12" value="sucha" required> Sucha</label><br>
        <label><input type="radio" class="radio-inline" id="12" name="12" value="bardzo sucha" required> Bardzo sucha</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="13">Czy uważa Pan/Pani, że zbyt często oddaje mocz?</label><br><br>
        <label><input type="radio" class="radio-inline" id="13" name="13" value="tak" required> Tak</label><br>
        <label><input type="radio" class="radio-inline" id="13" name="13" value="nie" required> Nie</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="14">Czy zauważył/-a Pan/Pani u siebie znaczące wahania wagi w ostatnim czasie?</label><br><br>
        <label><input type="radio" class="radio-inline" id="14" name="14" value="tak" required> Tak</label><br>
        <label><input type="radio" class="radio-inline" id="14" name="14" value="nie" required> Nie</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="15">Czy chorował ktoś u Pana/Pani w rodzinie na cukrzycę?</label><br><br>
        <label><input type="radio" class="radio-inline" id="15" name="15" value="tak" required> Tak</label><br>
        <label><input type="radio" class="radio-inline" id="15" name="15" value="nie" required> Nie</label><br>
        <label><input type="radio" class="radio-inline" id="15" name="15" value="nie wiem" required> Nie wiem</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="16">Czy leczy się Pan/Pani na choroby tarczycy?</label><br><br>
        <label><input type="radio" class="radio-inline" id="16" name="16" value="tak" required> Tak</label><br>
        <label><input type="radio" class="radio-inline" id="16" name="16" value="nie" required> Nie</label></p><br>
    </div>
    <hr>
    <div class="form-group">
        <p><label for="17">Czy cierpi Pan/Pani na nadciśnienie tętnicze?</label><br><br>
        <label><input type="radio" class="radio-inline" id="17" name="17" value="tak" required> Tak</label><br>
        <label><input type="radio" class="radio-inline" id="17" name="17" value="nie" required> Nie</label></p><br>
    </div>

    <br>
    <input type="submit" class="button" value="Wyślij ankietę" name="form">


</form>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

</body></html>



