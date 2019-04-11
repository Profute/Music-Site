<?php
require "Login.php";
    $sql = "INSERT INTO Nummer (Lyric, Title)
	VALUES ('".$_POST["LName"]."', '".$_POST["SName"]."')";
    $last_NummerId = $conn->insert_id;
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	} 
//	$sql = "INSERT INTO Artist (ArtistNavn, nationalitet, foeselsdato)

	$sql = "INSERT INTO Artist (ArtistNavn)
	VALUES ('".$_POST["AName"]."')";

	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    
    //$sql = "INSERT INTO Album (Titel, Genre)
    $sql = "INSERT INTO Album (Titel,NummerID)
    VALUES ('".$_POST["AlName"]."','".$last_NummerId."')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

	// $sql = "INSERT INTO Pladeselskab (Navn)
	// VALUES ('')";

	// if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
	// } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
	// } 

	// $sql = "INSERT INTO Band (bandNavn,	nationalitet, dannelse)
	// VALUES ('', '', '')";

	// if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
	// } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    
	// $sql = "INSERT INTO Single (Titel, Genre)
	// VALUES ('', '')";

	// if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
	// } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
	// }

	
?>
 