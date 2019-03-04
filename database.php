<?php
	require "AdminLogin.php";
	
	$sql = "CREATE DATABASE IF NOT EXISTS Music_Site"; //Laver databasen Music_Site
	if ($conn->query($sql) == TRUE) {
		echo "Salutations traveler"; //Hvis forbindelsen oprettes får du hilsnen "Salutations traveler"
	} else{
		echo "you got fucked kiddo: <br>" . $conn->error; //Hvis forbindelsen ikke oprettes får du meddelesen "you got fucked kiddo"
	}
	$conn->close();

	require "Login.php";
	$sql = "CREATE Table  If NOT EXISTS Artist(
		ArtistId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		ArtistNavn VARCHAR(80) NOT NULL,
		nationalitet VARCHAR(30) NOT NULL,
		føselsdato VARCHAR(30) NOT NULL
		)";

		if ($conn->query($sql) === TRUE) {
			echo "Table køb created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
	  	}

		$sql = "CREATE Table  If NOT EXISTS Band(
			BandId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			BandNavn VARCHAR(300) NOT NULL,
			nationalitet VARCHAR(30) NOT NULL,
			dannelse VARCHAR(30) NOT NULL,
			pladeselskab int,
			FOREIGN KEY (pladeselskab) REFERENCES Pladeselskab(pladesId)
			Medlemmer int,
			FOREIGN KEY (Medlemmer) REFERENCES Medlemmer(MedlemmerId)
		)";
		if ($conn->query($sql) === TRUE) {
			echo "Table køb created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
		}
		  
		$sql = "CREATE Table  If NOT EXISTS Medlemmer(
			MedlemmerId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			BandNavn VARCHAR,
			FOREIGN KEY (BandNavn) REFERENCES Band(BandNavn)
			ArtistNavn VARCHAR,
			FOREIGN KEY (ArtistNavn) REFERENCES Artist(ArtistNavn)
		)";
		if ($conn->query($sql) === TRUE) {
			echo "Table køb created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
	 	}
	  
	 	 $sql = "CREATE Table  If NOT EXISTS Album(
			AlbumId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Titel VARCHAR(30),
			Genre VARCHAR(30),
			Bandid int,
			FOREIGN KEY (Bandid) REFERENCES Band(BandId),
			Artistid int, 
			FOREIGN KEY (Artistid) REFERENCES Artist(ArtistId)
			)";
		if ($conn->query($sql) === TRUE) {
			echo "Table køb created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
		}
		  
		$sql = "CREATE Table  If NOT EXISTS Sang(
			SangId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Album VARCHAR(300), 
			FOREIGN KEY (Album) REFERENCES Album(AlbumId),
			Singleid int, 
			FOREIGN KEY (Singleid) REFERENCES Single(SingleId),
			Nummerid INT,
			FOREIGN KEY (Nummerid) REFERENCES Nummer(NummerID)
			)";
		if ($conn->query($sql) === TRUE) {
			echo "Table køb created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
	  	}

		$sql = "CREATE Table IF NOT EXISTS Nummer(
			NummerID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Lyric VARCHAR(300),
			Title Varchar(300)
			)";
		if ($conn->query($sql) === TRUE) {
			echo "Table køb created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
	  	}

	  	$sql = "CREATE Table  IF NOT EXISTS Single(
			SingleId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Titel VARCHAR(30),
			Band int,
			FOREIGN KEY (Band) REFERENCES Band(BandId),
			Artistid int, 
			FOREIGN KEY (Artistid) REFERENCES Artist(ArtistId),
			Genre VARCHAR(30)
			)";
		if ($conn->query($sql) === TRUE) {
			echo "Table køb created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
		}		
			
		$sql = "CREATE Table IF NOT EXISTS Pladeselskab(
			pladesId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Navn VARCHAR(30),
			)";
		if ($conn->query($sql) === TRUE) {
			echo "Table køb created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
	  	}


?>