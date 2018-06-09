<meta charset="utf-8">

<?php

session_start();

$servername = "mysql.agh.edu.pl";
$username = "ajamro1";
$password = "ukXrScjqW07h4aCz";
$database = "ajamro1";

// Wygenerowanie connection obiect conn
	$conn = new mysqli($servername, $username, $password, $database);
			
	//Sprawdzenie połączenia
	if($conn->connect_error){
    die("Brak połączenia: " . $conn->connect_error . "<br>");
}

include 'dane.php';

$conn->close();

?>

