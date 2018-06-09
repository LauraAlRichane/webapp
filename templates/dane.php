<meta charset="utf-8">

<?php
 
if(isset($_POST['form'])){
$plec = $_POST['gender'];  // Storing Selected Value In Variable
$wiek = $_POST['age'];
$wzrost = $_POST['height'];
$waga = $_POST['weight'];
$zawod = $_POST['activity'];
$sport = $_POST['sport'];
$posilki = $_POST['meals'];
$odzywianie = $_POST['opinion'];
$sennosc = $_POST['9'];
$pragnienie = $_POST['10'];
$suchosc = $_POST['11'];
$skora = $_POST['12'];
$mocz = $_POST['13'];
$wahania_wagi = $_POST['14'];
$cukrzyca_rodzina = $_POST['15'];
$tarczyca = $_POST['16'];
$nadcisnienie = $_POST['17'];
}


//Dodaj do bazy
$sql = "INSERT INTO Ankieta
(plec,
wiek,
wzrost,
waga,
zawod,
sport,
posilki,
odzywianie,
sennosc,
pragnienie,
suchosc,
skora,
mocz,
wahania_wagi,
cukrzyca_rodzina,
tarczyca,
nadcisnienie)
VALUES
('$plec',
'$wiek',
'$wzrost',
'$waga',
'$zawod',
'$sport',
'$posilki',
'$odzywianie',
'$sennosc',
'$pragnienie',
'$suchosc',
'$skora',
'$mocz',
'$wahania_wagi',
'$cukrzyca_rodzina',
'$tarczyca',
'$nadcisnienie')";

$add=$conn->query($sql);
            	if($add){
             		echo "<p>Zapisano Twoje odpowiedzi.</p>";   
            	}
            	else {
             		echo "<p>Wystąpił błąd podczas dopisywania.</p>";   
            	}

?>