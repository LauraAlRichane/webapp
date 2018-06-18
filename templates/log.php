<meta charset="utf-8">

<?php

//session_start();


$base_data="/home/eaiibgrp/ajamro/a/01.php";
include($base_data);
if(file_exists($base_data)){
		$conn = new mysqli($servername, $username, $password, $database);
		if($conn->connect_error) {
		    die("Brak połączenia: " . $conn->connect_error . "<br>");
		    return NULL;
		}
}

?>

