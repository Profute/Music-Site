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
		fornavn VARCHAR(30) NOT NULL,
		efternavn VARCHAR(30) NOT NULL,
		nationalitet VARCHAR(30) NOT NULL,
		føselsdato VARCHAR(30) NOT NULL,
		pladeselskab VARCHAR(30) NOT NULL,
		Band VARCHAR(30),
		FOREIGN KEY (Band) REFERENCES Band(BandId)
		)";
			$sql = "CREATE Table  If NOT EXISTS Artist(
		ArtistId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		fornavn VARCHAR(30) NOT NULL,
		efternavn VARCHAR(30) NOT NULL,
		nationalitet VARCHAR(30) NOT NULL,
		føselsdato VARCHAR(30) NOT NULL,
		pladeselskab VARCHAR(30) NOT NULL,
		Band VARCHAR(30),
		FOREIGN KEY (Band) REFERENCES Band(BandId)
		)";

		$sql = "CREATE Table  If NOT EXISTS Band(
			BandId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			nationalitet VARCHAR(30) NOT NULL,
			opratelsesdato VARCHAR(30) NOT NULL,
			pladeselskab VARCHAR(30) NOT NULL,
			Medlemmer VARCHAR(300),
			FOREIGN KEY (Medlemmer) REFERENCES Artist(ArtistId)
		)";

		$sql = "CREATE Table  If NOT EXISTS Album(
			AlbumId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Titel VARCHAR(30),
			Band VARCHAR(300),
			FOREIGN KEY (Band) REFERENCES Band(BandId),
			Artist VARCHAR(300), 
			FOREIGN KEY (Artist) REFERENCES Artist(ArtistId),
			Sang VARCHAR(300), 
			FOREIGN KEY (Sang) REFERENCES Sang(SangId),
			Genre VARCHAR(30)
			)";

		$sql = "CREATE Table  If NOT EXISTS Sang(
			SangId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Titel VARCHAR(30),
			Band VARCHAR(300),
			FOREIGN KEY (Band) REFERENCES Band(BandId),
			Artist VARCHAR(300), 
			FOREIGN KEY (Artist) REFERENCES Artist(ArtistId),
			Album VARCHAR(300), 
			FOREIGN KEY (Album) REFERENCES Album(AlbumId),
			Single VARCHAR(300), 
			FOREIGN KEY (Single) REFERENCES Single(SingleId),
			Genre VARCHAR(30),
			Lyric VARCHAR(300)
			)";

		$sql = "CREATE Table  IF NOT EXISTS Single(
			SingleId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Titel VARCHAR(30),
			Band VARCHAR(300),
			FOREIGN KEY (Band) REFERENCES Band(BandId),
			Artist VARCHAR(300), 
			FOREIGN KEY (Artist) REFERENCES Artist(ArtistId),
			Album VARCHAR(300), 
			FOREIGN KEY (Album) REFERENCES Album(AlbumId),
			Sang VARCHAR(300), 
			FOREIGN KEY (Sang) REFERENCES Sang(SangId),
			Genre VARCHAR(30),
			Lyric VARCHAR(300)
			)";
					
		$sql = "CREATE Table IF NOT EXISTS pladeselskab(
			pladeselskabID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Navn VARCHAR(30),
			Artist VARCHAR(300), 
			FOREIGN KEY (Artist) REFERENCES Artist(ArtistId),
			Band VARCHAR(300),
			FOREIGN KEY (Band) REFERENCES Band(BandId),
			)";



?>