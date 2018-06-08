<?php
echo 'jestem w pliku baza';

session_start();

function PolaczBaza() {
$servername = "mysql.agh.edu.pl";
$username = "ajamro1";
$password = "ukXrScjqW07h4aCz";
$database = "ajamro1";

// Wygenerowanie connection obiect conn
	$conn = new mysqli($servername, $username, $password, $database);
			
	//Sprawdzenie połączenia
	if ($conn->connect_error) {
		die("Brak połączenia: " . $conn->connect_error . "<br>");
		return NULL;
	} else {
		return $conn;
	}
}

function Zapytanie($kwerenda){
		$conn = PolaczBaza();
		$result = $conn->query("SET NAMES 'utf8'");
		if(mysqli_errno($conn)){
			$BladTxt="Błąd " . mysqli_errno($conn) . ": " . mysqli_error($conn);
			header("Location: ./app_error.php?tx_err=Zapytanie&gdzie=$BladTxt");
		}
		
		$conn->close();
		return $result;
	}

?>

