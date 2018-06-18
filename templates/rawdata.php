
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
            <li><a href="./rawdata.php">Twoje odpowiedzi</a></li>
            <li><a href="./result.php">Wyniki</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
<?php
//session_start();
	require_once './log.php';
	$kwerenda = "SELECT COUNT(*) FROM Ankieta"; 	//counts rows in the table
	$how_many = $conn->query($kwerenda);
	$row = $how_many->fetch_assoc();
	$ilosc = $row["COUNT(*)"];
	$kwerenda="SELECT * FROM Ankieta WHERE id = $ilosc";
	$result = $conn->query($kwerenda);
	$row = $result->fetch_assoc();
	?>
	
	 <div class="col-sm-9">
      <div class="well" style="background-color:#00cc99;">
  <h2 >Twoje odpowiedzi na pytania</h2> 
  </div>

<br><br>
  <div class="responsive">          
  <ol>
<li><b>Płeć:</b><br> <?php echo $row['plec'];?> <br> <br></li>
<li><b>Wiek:</b><br> <?php echo $row['wiek'];?> <br><br> </li>
<li><b>Pana/Pani wzrost wynosi w cm:</b><br> <?php echo $row['wzrost'];?> <br><br> </li>
<li><b>Pana/Pani waga wynosi w kg: </b><br> <?php echo $row['waga'];?> <br><br> </li>
<li><b>Pana/Pani aktywność zawodowa:</b><br> <?php echo $row['zawod'];?> <br><br> </li>
<li><b>Jak często w czasie wolnym uprawia Pan/Pani sport?</b><br> <?php echo $row['sport'];?> <br><br> </li>
<li><b>Ile posiłków w ciągu dnia Pan/Pani spożywa?</b><br> <?php echo $row['posilki'];?> <br><br> </li>
<li><b>Czy uważa Pan/Pani, że zdrowo się odżywia?</b><br> <?php echo $row['odzywianie'];?> <br><br> </li>
<li><b>Czy w ciągu dnia zdarzają się Panu/Pani powtarzające się uczucia senności i apatii?</b><br> <?php echo $row['sennosc'];?> <br><br> </li>
<li><b>Czy uważa Pan/Pani, że cierpi na nadmierne pragnienie?</b><br> <?php echo $row['pragnienie'];?> <br><br> </li>
<li><b>Jak  często odczuwa Pan/Pani suchość w gardle?</b><br> <?php echo $row['suchosc'];?> <br><br> </li>
<li><b>Jak ocenia Pan/Pani kondycję Pani/Pana skóry?</b><br> <?php echo $row['skora'];?> <br> <br></li>
<li><b>Czy uważa Pan/Pani, że zbyt często oddaje mocz?</b><br> <?php echo $row['mocz'];?> <br> <br></li>
<li><b>Czy zauważył/-a Pan/Pani u siebie znaczące wahania wagi w ostatnim czasie?</b><br> <?php echo $row['wahania_wagi'];?> <br> <br></li>
<li><b>Czy chorował ktoś u Pana/Pani w rodzinie na cukrzycę?</b><br> <?php echo $row['cukrzyca_rodzina'];?> <br> <br></li>
<li><b>Czy leczy się Pan/Pani na choroby tarczycy?</b><br> <?php echo $row['tarczyca'];?> <br> <br></li>
<li><b>Czy cierpi Pan/Pani na nadciśnienie tętnicze?</b><br> <?php echo $row['nadcisnienie'];?> <br> <br></li>
</ol>
  </div>


    </div> <!-- /container -->	


	 </div>


    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

</body></html>



