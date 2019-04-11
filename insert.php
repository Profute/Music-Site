<?php
require "Login.php";
    $sql = "INSERT INTO Nummer (Lyric, Title)
	VALUES ('".$_POST["LName"]."', '".$_POST["SName"]."')";
	if ($conn->query($sql) === TRUE) {
        $last_Nid = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_Nid."<br>";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	} 
//	$sql = "INSERT INTO Artist (ArtistNavn, nationalitet, foeselsdato)

	$sql = "INSERT INTO Artist (ArtistNavn)
	VALUES ('".$_POST["AName"]."')";

	if ($conn->query($sql) === TRUE) {
        $last_Aid = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_Aid."<br>";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    
    //$sql = "INSERT INTO Album (Titel, Genre, Artistid,NummerID)
    $sql = "INSERT INTO Album (Titel,Artistid,NummerID)
    VALUES ('".$_POST["AlName"]."','".$last_Aid."','".$last_Nid."')";

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
 