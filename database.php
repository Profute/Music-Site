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
		foeselsdato VARCHAR(30) NOT NULL
		)";
		if ($conn->query($sql) === TRUE) {
			echo "Table Artist created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
		  }
		$sql = "CREATE Table IF NOT EXISTS Nummer(
			NummerID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Lyric VARCHAR(300),
			Title Varchar(300)
			)";
		if ($conn->query($sql) === TRUE) {
			echo "Table Nummer created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
		  }
		  
		

		$sql = "CREATE Table IF NOT EXISTS Pladeselskab(
			pladesId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			Navn VARCHAR(30)
			)";
		if ($conn->query($sql) === TRUE) {
			echo "Table Pladeselskab created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
		  }
		  $conn->close();
		  require "Login.php";
		$sql = "CREATE Table  If NOT EXISTS Band(
			bandId INT(6) UNSIGNED AUTO_INCREMENT, 
			bandNavn VARCHAR(300) NOT NULL,
			nationalitet VARCHAR(30) NOT NULL,
			dannelse VARCHAR(30) NOT NULL,				
			pladesId INT(6) UNSIGNED,
			medlemmerId INT(6) UNSIGNED,
			PRIMARY KEY (bandId),						
			FOREIGN KEY (pladesId) REFERENCES Pladeselskab(pladesId) 
			
		)";
		if ($conn->query($sql) === TRUE) {
			echo "Table Band created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
		}
		// skal laves så forien key tilføres efter tabelen er lavet.
		$sql = "CREATE Table  If NOT EXISTS Album(
			AlbumId INT(6) UNSIGNED AUTO_INCREMENT, 
			Titel VARCHAR(30),
			Genre VARCHAR(30),
			Bandid int(6) UNSIGNED,
			Artistid int(6) UNSIGNED,
			PRIMARY KEY(albumId),
			FOREIGN KEY (bandid) REFERENCES band(bandId),
			FOREIGN KEY (artistid) REFERENCES artist(ArtistId)
			)";
		if ($conn->query($sql) === TRUE) {
			echo "Table Album created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
		}  
		$sql = "CREATE Table IF NOT EXISTS Medlemmer(
			medlemmerId INT(6) UNSIGNED AUTO_INCREMENT,
			Bandid int(6) UNSIGNED,
			Artistid int(6) UNSIGNED,
			PRIMARY KEY(medlemmerId),
			FOREIGN KEY (bandId) REFERENCES band(bandId),
			FOREIGN KEY (ArtistId) REFERENCES artist(ArtistId)
		)";
		if ($conn->query($sql) === TRUE) {
			echo "Table Medlemmer created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
	 	}
		 $sql = "CREATE Table  IF NOT EXISTS Single(
			SingleId INT(6) UNSIGNED AUTO_INCREMENT, 
			Titel VARCHAR(30),
			Genre VARCHAR(30),
			Band INT(6) UNSIGNED,
			Artistid INT(6) UNSIGNED, 
			PRIMARY KEY(SingleId),
			FOREIGN KEY (Band) REFERENCES Band(BandId),
			FOREIGN KEY (Artistid) REFERENCES Artist(ArtistId)
			)";
		if ($conn->query($sql) === TRUE) {
			echo "Table Single created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
		}	

		
		  
	  	$sql = "CREATE Table  If NOT EXISTS Sang(
			SangId INT(6) UNSIGNED AUTO_INCREMENT, 
			Album INT(6) UNSIGNED,
			SingleId INT(6) UNSIGNED,
			NummerID INT(6) UNSIGNED,
			PRIMARY KEY(SangId),
			FOREIGN KEY (album) REFERENCES album(albumId),
			FOREIGN KEY (SingleId) REFERENCES Single(SingleId),
			FOREIGN KEY (NummerID) REFERENCES Nummer(NummerID)
			)";
		if ($conn->query($sql) === TRUE) {
			echo "Table Sang created successfully<br>";
		} else {
		   echo "Error creating table: <br>" . $conn->error;
	  	}

		

	  		
			
		
		  

?>