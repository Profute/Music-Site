<?php
require "Login.php";
    $sql = "INSERT INTO Nummer (Lyric, Title)
	VALUES ('', '')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	} 
//$sql = "SET @letter = '" . $letter . "'; SELECT Titel FROM Album WHERE LOWER(LEFT(Titel,1)) = @letter";
	$sql = "INSERT INTO Artist (ArtistNavn, nationalitet, foeselsdato)
	VALUES ('', '', '')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	} 

	$sql = "INSERT INTO Pladeselskab (Navn)
	VALUES ('')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	} 

	$sql = "INSERT INTO Band (bandNavn,	nationalitet, dannelse)
	VALUES ('', '', '')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO Album (Titel, Genre)
	VALUES ('', '')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sql = "INSERT INTO Single (Titel, Genre)
	VALUES ('', '')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	
?>
 