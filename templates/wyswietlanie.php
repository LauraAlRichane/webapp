<?php
	//$inc = "./funkcje.php";
	//if(file_exists($inc)) include($inc);
	//else{
	//	echo "Error!<br>";
	//}

if($_SESSION['Etap']=="Data_Saved")	{
	$kwerenda = "SELECT COUNT(*) FROM Ankieta"; 	//counts rows in the table
	$how_many = $conn->query($kwerenda);
	$row = $how_many->fetch_assoc();
	//echo $row["COUNT(*)"];
	$ilosc = $row["COUNT(*)"];
	
	$kwerenda="SELECT 
		plec,
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
		nadcisnienie
		FROM Ankieta a WHERE id = $ilosc";
	//$result = Zapytanie($kwerenda);
	
	$result = $conn->query($kwerenda);
	$row = $result->fetch_assoc();
	
	$suma = 5;		//bo płeć, wiek, zawod, sport i posilki
	$val1 = 1;
	$val2 = 2;
	$val3 = 3;
	
	//echo "POcząek: " . $suma . "<br>";
	
	//BMI
	$BMI = $row["waga"]/(($row["wzrost"]/100)*($row["wzrost"]/100));
	if ($BMI >= 25){
		$suma = $suma + $val2;
	}
	
	//echo "BMI: " . $suma . "<br>";
	
	//Odzywianie
	if ($row["odzywianie"] == 'tak'){
		$suma = $suma + $val1;
	} else {
		$suma = $suma + $val2;
	}
	
	//echo "Odzywianie: " . $suma . "<br>";
	
	//Sennosc
	if ($row["sennosc"] == 'rzadko'){
		$suma = $suma + $val1;
	} else {
		$suma = $suma + $val2;
	}
	
	//echo "Sennosc: " . $suma . "<br>";
	
	//Pragnienie
	if ($row["pragnienie"] == 'nie'){
		$suma = $suma + $val1;
	} else {
		$suma = $suma + $val2;
	}
	
	//echo "pragnienie: " . $suma . "<br>";
	
	//Suchosc
	if ($row["suchosc"] == 'czesto'){
		$suma = $suma + $val2;
	} else {
		$suma = $suma + $val1;
	}
	
	//echo "Suchosc: " . $suma . "<br>";
	
	//Skora
	if ($row["skora"] == 'normalna' or $row["skora"] == 'sucha'){
		$suma = $suma + $val1;
	} else {
		$suma = $suma + $val2;
	}
	
	//echo "Skora: " . $suma . "<br>";
	
	//Mocz
	if ($row["mocz"] == 'tak'){
		$suma = $suma + $val2;
	} else {
		$suma = $suma + $val1;
	}
	
	//echo "Mocz: " . $suma . "<br>";
	
	//Wahania_wagi
	if ($row["wahania_wagi"] == 'tak'){
		$suma = $suma + $val2;
	} else {
		$suma = $suma + $val1;
	}
	
	//echo "Wahania wagi: " . $suma . "<br>";
	
	//Cukrzyca_rodzina
	if ($row["cukrzyca_rodzina"] == 'tak'){
		$suma = $suma + $val3;
	} else {
		$suma = $suma + $val2;
	}
	
	//echo "Cukrzyca rodzina: " . $suma . "<br>";
	
	//Tarczyca
	if ($row["tarczyca"] == 'tak'){
		$suma = $suma + $val2;
	} else {
		$suma = $suma + $val1;
	}
	
	//echo "Tarczyca: " . $suma . "<br>";
	
	//Nadcisnienie
	if ($row["odzywianie"] == 'tak'){
		$suma = $suma + $val2;
	} else {
		$suma = $suma + $val1;
	}
	
	//echo "Nadcisnienie: " . $suma . "<br>";
	
	if ($suma<=18){
		echo "Dziękujemy na wypełnienie ankiety! Jesteś w świetnej kondycji! 
		Brak niepokojących wskazań do zdiagnozowania cukrzycy.<br>
		Twoje BMI wynosi: " . $BMI;

	}elseif($suma<=24){
		echo "Dziękujemy na wypełnienie ankiety! Stan Twojego zdrowia jest dobry, 
		ale budzi pewne zastrzeżenia. Udaj się do lekarza celem sprawdzenia poziomu glukozy we krwi.<br>
		Twoje BMI wynosi: " . $BMI;

	}else{
		echo "Dziękujemy na wypełnienie ankiety! Stan Twojego zdrowia jest niezadawalający, zalecamy 
		wykonanie badania glukozy oraz morfologii krwi w celu wczesnego wykrycia cukrzycy oraz sprawdzenia 
		ogólnej kondycji zdrowia. <br>
		Twoje BMI wynosi: " . $BMI;
	}
	$sql = "UPDATE Ankieta SET wynik='$suma' where id='$ilosc'";
$result = $conn->query($sql);
}	
?>
