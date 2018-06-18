
<html lang="pl"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rozpoznanie cukrzycy typu I u młodych ludzi</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
            <li><a href="/">Storna Główna</a></li>
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
//if($_SESSION['Etap']=="Data_Saved"){
	$kwerenda = "SELECT COUNT(*) FROM Ankieta WHERE wynik<=18"; 	//counts rows in the table
	$how_many_healthy = $conn->query($kwerenda);
	$row = $how_many_healthy->fetch_assoc();
	$ilosc_zdrowych = $row["COUNT(*)"];
	
	$kwerenda = "SELECT COUNT(*) FROM Ankieta WHERE wynik>24"; 	//counts rows in the table
	$how_many_ill = $conn->query($kwerenda);
	$row = $how_many_ill->fetch_assoc();
	$ilosc_chorych = $row["COUNT(*)"];
	
	
	$kwerenda = "SELECT COUNT(*) FROM Ankieta WHERE wynik<=24 AND wynik>18"; 	//counts rows in the table
	$how_many = $conn->query($kwerenda);
	$row = $how_many->fetch_assoc();
	$ilosc_srednich = $row["COUNT(*)"];
	
	$kwerenda = "SELECT COUNT(*) FROM Ankieta"; 	//counts rows in the table
	$how_many_all = $conn->query($kwerenda);
	$row = $how_many_all->fetch_assoc();
	$ilosc_wszystkich = $row["COUNT(*)"];
	
	$kwerenda = "SELECT wynik FROM Ankieta WHERE id='$ilosc_wszystkich'"; 	//counts rows in the table
	$ostatni = $conn->query($kwerenda);
	$row = $ostatni->fetch_assoc();
	$wynik_ostatni = $row["wynik"];
	
	
	?>
	
	 <div class="col-sm-9">
      <div class="well" style="background-color:#00cc99;">
  <h2 >Odpowiedzi uczestników ankiety - stopień zagrożenia cukrzycą</h2> 
  </div>
   
<h4><br>Na <font color="red">czerwono</font> zaznaczono grupę ankietowanych o wyniku takim jak Twój<br></h4>


                <script src="Chart.js"></script>
<?php if($wynik_ostatni<=18){ ?>

 <canvas id="myChart5" width="15" height="10"></canvas>
                <script>
                    var ctx = document.getElementById("myChart5");
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["osoby zdrowe", "grupa ryzyka", "osoby z cukrzycą"],
                            datasets: [{
                                label: 'Ilość osób o danym stopniu zagrożenia cukrzycą',
                                data: [<?php echo $ilosc_zdrowych;?>, <?php echo $ilosc_srednich;?>, <?php echo $ilosc_chorych;?>,],
                                backgroundColor: [
					'rgba(255,0,0, 1)',
                                    'rgba(54, 162, 235, 0.7)',
                                    'rgba(255, 206, 86, 0.7)', 
                               ],
                                borderColor: [
                                    'rgba(255,0,0,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                                                    ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
<?php } elseif($wynik_ostatni>24) {?>
<canvas id="myChart5" width="15" height="10"></canvas>
                <script>
                    var ctx = document.getElementById("myChart5");
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["osoby zdrowe", "grupa ryzyka", "osoby z cukrzycą"],
                            datasets: [{
                                label: 'Ilość osób o danym stopniu zagrożenia cukrzycą',
                                data: [<?php echo $ilosc_zdrowych;?>, <?php echo $ilosc_srednich;?>, <?php echo $ilosc_chorych;?>,],
                                backgroundColor: [
					'rgba(54, 162, 235, 0.7)',
                                    'rgba(255, 206, 86, 0.7)',
                                    'rgba(255,0,0, 1)', 
                               ],
                                borderColor: [
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(255,0,0, 1)',
                                                                    ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>

<?php } else {?>
<canvas id="myChart5" width="15" height="10"></canvas>
                <script>
                    var ctx = document.getElementById("myChart5");
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ["osoby zdrowe", "grupa ryzyka", "osoby z cukrzycą"],
                            datasets: [{
                                label: 'Ilość osób o danym stopniu zagrożenia cukrzycą',
                                data: [<?php echo $ilosc_zdrowych;?>, <?php echo $ilosc_srednich;?>, <?php echo $ilosc_chorych;?>,],
                                backgroundColor: [
					'rgba(54, 162, 235, 0.7)',
                                    'rgba(255,0,0, 1)',
                                    'rgba(255, 206, 86, 0.7)', 
                               ],
                                borderColor: [
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255,0,0, 1)',
                                    'rgba(255, 206, 86, 1)',
                                                                    ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>

<?php } ?>


				  </div>
	
    </div> <!-- /container -->
	 </div>


    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

</body></html>



