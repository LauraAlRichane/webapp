
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
<meta charset="utf-8">

<?php

session_start();
$_SESSION['id']=1;
error_reporting (E_ALL);
ini_set('display_errors', 1);

$base_data="/home/eaiibgrp/ajamro/a/01.php";
include($base_data);
if(file_exists($base_data)){
		$conn = new mysqli($servername, $username, $password, $database);
		if($conn->connect_error) {
		    die("Brak połączenia: " . $conn->connect_error . "<br>");
		    return NULL;
		}

// Wygenerowanie connection obiect conn
$conn = new mysqli($servername, $username, $password, $database);
			
//Sprawdzenie połączenia
	if($conn->connect_error){
    die("Brak połączenia: " . $conn->connect_error . "<br>");
}
}

include 'dane.php';
include 'wyswietlanie.php';

//$conn->close();

?>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

</body></html>

