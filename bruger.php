<?php
session_start();

require "AdminLogin.php";
$sql = "CREATE USER IF NOT EXISTS '".$_POST["UName"]."'@'localhost' IDENTIFIED BY '".$_POST["pword"]."'";
 if ($conn->query($sql) === TRUE) {
    echo "User created successfully<br>";
    } else {
     echo "Error creating user, user EXISTS. do it agin boy: <br> header('location:../../index.php');" . $conn->error;
 }
$sql = "GRANT UPDATE, INSERT, DELETE, SELECT ON Music_Site.* TO '".$_POST["UName"]."'@'localhost'";
 if ($conn->query($sql) === TRUE) {
     echo "User privilegier created successfully<br>";
    } else {
     echo "Error creating user privilegier: <br>" . $conn->error;
    }

    $sql = "CREATE USER IF NOT EXISTS 'peasant'@'localhost' IDENTIFIED BY '1234'";
    if ($conn->query($sql) === TRUE) {
       echo "User created successfully<br>";
       } else {
        echo "Error creating user: <br>" . $conn->error;
    }
   $sql = "GRANT SELECT ON Music_Site.* TO 'peasant'@'localhost'";
    if ($conn->query($sql) === TRUE) {
        echo "User privilegier created successfully<br>";
       } else {
        echo "Error creating user privilegier: <br>" . $conn->error;
       }



     //Create database
    $sql = "CREATE DATABASE IF NOT EXISTS Music_Site ";
    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
    } else {
     echo "Error creating database: <br>" . $conn->error;
    }

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS Music_Site.Bruger (
    bruger_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    brugerNavn VARCHAR(30) NOT NULL UNIQUE 
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table Bruger created successfully<br>";
    } else {
       echo "Error creating table Bruger: <br>" . $conn->error;
    }

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS Music_Site.Poste (
        Post_Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        Post VARCHAR(3600) NOT NULL,
        bruger int(6) UNSIGNED 
        )";

    if ($conn->query($sql) === TRUE) {
    echo "Table Poste created successfully<br>";
    } else {
   echo "Error creating table Poste: <br>" . $conn->error;
    }

    $sql = "ALTER TABLE Poste
          ADD FOREIGN KEY (bruger) REFERENCES Bruger(bruger_id)";
          
		  if ($conn->query($sql) === true) {
			  echo "Table Poste ALTER successfully<br>";
		  } else {
			 echo "Error ALTERing table Poste: <br>" . $conn->error;
			}




if(!empty($_POST["UName"])){
$sql = "INSERT INTO Music_Site.Bruger(brugerNavn) 
VALUES (' ".$_POST["Uname"]." ')";
}
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id ;"<br>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$_SESSION["curentBruger"] = "UName";
$conn->close();

header("location:../Music-Site/index.php");

?>
   
