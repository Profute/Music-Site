<?php 
	require "AdminLogin.php";
	
	$sql = "CREATE DATABASE IF NOT EXISTS Music_Site"; //Laver databasen Music_Site
	if ($conn->query($sql) == true) {
		echo "Salutations traveler <br>"; //Hvis forbindelsen oprettes får du hilsnen "Salutations traveler"
	} else {
		echo "you got fucked kiddo: <br>" . $conn->error; //Hvis forbindelsen ikke oprettes får du meddelesen "you got fucked kiddo"
	}
	

	
	$sql = "CREATE Table  If NOT EXISTS Music_Site.Artist(
		ArtistId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		ArtistNavn VARCHAR(80) NOT NULL,
		nationalitet VARCHAR(30) NOT NULL,
		foeselsdato VARCHAR(30) NOT NULL
		)";
		if ($conn->query($sql) === true) {
			echo "Table Artist created successfully<br>";
		} else {
		   echo "Error creating table Artist: <br>" . $conn->error;
		  }
		$sql = "CREATE Table IF NOT EXISTS Music_Site.Nummer(
			NummerID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Lyric VARCHAR(300),
			Title Varchar(300)
			)";
		if ($conn->query($sql) === true) {
			echo "Table Nummer created successfully<br>";
		} else {
		   echo "Error creating table Nummer: <br>" . $conn->error;
		  }

		$sql = "CREATE Table IF NOT EXISTS Music_Site.Pladeselskab(
			pladesId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Navn VARCHAR(30)
			)";
		if ($conn->query($sql) === true) {
			echo "Table Pladeselskab created successfully<br>";
		} else {
		   echo "Error creating table Pladeselskab: <br>" . $conn->error;
		  }

		$sql = "CREATE Table  If NOT EXISTS Music_Site.Band(
			bandId INT(6) UNSIGNED AUTO_INCREMENT, 
			bandNavn VARCHAR(300) NOT NULL,
			nationalitet VARCHAR(30) NOT NULL,
			dannelse VARCHAR(30) NOT NULL,				
			pladesId INT(6) UNSIGNED,
			PRIMARY KEY (bandId)		
		)";
		if ($conn->query($sql) === true) {
			echo "Table Band created successfully<br>";
		} else {
		   echo "Error creating table Band: <br>" . $conn->error;
		}
		// skal laves så forien key tilføres efter tabelen er lavet.
		$sql = "CREATE Table  If NOT EXISTS Music_Site.Album(
			AlbumId INT(6) UNSIGNED AUTO_INCREMENT, 
			Titel VARCHAR(30),
			Genre VARCHAR(30),
			Bandid int(6) UNSIGNED,
			Artistid int(6) UNSIGNED,
			PRIMARY KEY(albumId),
			FOREIGN KEY (bandid) REFERENCES band(bandId)		
			)";
		if ($conn->query($sql) === true) {
			echo "Table Album created successfully<br>";
		} else {
		   echo "Error creating table Album: <br>" . $conn->error;
		}  
		$sql = "CREATE Table IF NOT EXISTS Music_Site.Medlemmer(
			medlemmerId INT(6) UNSIGNED AUTO_INCREMENT,
			Bandid int(6) UNSIGNED,
			Artistid int(6) UNSIGNED,
			PRIMARY KEY(medlemmerId),
			FOREIGN KEY (bandId) REFERENCES band(bandId)
		)";
		if ($conn->query($sql) === true) {
			echo "Table Medlemmer created successfully<br>";
		} else {
		   echo "Error creating table Medlemmer: <br>" . $conn->error;
	 	}
		 $sql = "CREATE Table IF NOT EXISTS Music_Site.Single(
			SingleId INT(6) UNSIGNED AUTO_INCREMENT, 
			Titel VARCHAR(30),
			Genre VARCHAR(30),
			Band INT(6) UNSIGNED,
			Artistid INT(6) UNSIGNED, 
			PRIMARY KEY(SingleId),
			FOREIGN KEY (Band) REFERENCES Band(BandId)
			)";
		if ($conn->query($sql) === true) {
			echo "Table Single created successfully<br>";
		} else {
		   echo "Error creating table Single: <br>" . $conn->error;
		}	

		
		  
	  	$sql = "CREATE Table  If NOT EXISTS Music_Site.Sang(
			SangId INT(6) UNSIGNED AUTO_INCREMENT, 
			Album INT(6) UNSIGNED,
			SingleId INT(6) UNSIGNED,
			NummerID INT(6) UNSIGNED,
			PRIMARY KEY(SangId),
			FOREIGN KEY (album) REFERENCES album(albumId),
			FOREIGN KEY (SingleId) REFERENCES Single(SingleId)
			)";
		if ($conn->query($sql) === true) {
			echo "Table Sang created successfully<br>";
		} else {
		   echo "Error creating table Sang: <br>" . $conn->error;
	  	}

		$sql = "ALTER TABLE Music_Site.Sang
		ADD FOREIGN KEY (NummerID) REFERENCES Nummer(NummerID)";
		if ($conn->query($sql) === true) {
			echo "Table Sang ALTER successfully<br>";
		} else {
		   echo "Error ALTERing table Sang: <br>" . $conn->error;
	  	}
		  
		$sql = "ALTER TABLE Music_Site.Single
		ADD FOREIGN KEY (Artistid) REFERENCES Artist(ArtistId)";
		if ($conn->query($sql) === true) {
			echo "Table Singel ALTER successfully<br>";
		} else {
		   echo "Error ALTERing table Singel: <br>" . $conn->error;
		  }
		
		$sql = "ALTER TABLE Music_Site.Medlemmer
		ADD FOREIGN KEY (ArtistId) REFERENCES artist(ArtistId)";
		if ($conn->query($sql) === true) {
			echo "Table Medlemmer ALTER successfully<br>";
		} else {
			echo "Error ALTERing table Medlemmer: <br>" . $conn->error;
		}

		$sql = "ALTER TABLE Music_Site.Album
		ADD FOREIGN KEY (artistid) REFERENCES artist(ArtistId)";
		if ($conn->query($sql) === true) {
			echo "Table Album ALTER successfully<br>";
		} else {
			echo "Error ALTERing table Album: <br>" . $conn->error;
		}
		
		$sql = "ALTER TABLE Music_Site.Band
		ADD FOREIGN KEY (pladesId) REFERENCES Pladeselskab(pladesId)";
		if ($conn->query($sql) === true) {
			echo "Table Band ALTER successfully<br>";
		} else {
			echo "Error ALTERing table Band: <br>" . $conn->error;
		}

		$conn->close();
?>