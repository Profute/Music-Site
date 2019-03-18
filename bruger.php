<?php
session_start();

require "AdminLogin.php";
$sql = "CREATE USER IF NOT EXISTS '".$_GET["bnavn"]."'@'localhost' IDENTIFIED BY '".$_GET["pword"]."'";
 if ($conn->query($sql) === TRUE) {
    echo "User created successfully<br>";
    } else {
     echo "Error creating user: <br>" . $conn->error;
 }
$sql = "GRANT ALL ON aktiespil.* TO '".$_GET["bnavn"]."'@'localhost'";
 if ($conn->query($sql) === TRUE) {
     echo "User privilegier created successfully<br>";
    } else {
     echo "Error creating user privilegier: <br>" . $conn->error;
    }

     //Create database
    $sql = "CREATE DATABASE IF NOT EXISTS aktiespil ";
    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
    } else {
     echo "Error creating database: <br>" . $conn->error;
    }

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS aktiespil.Bruger (
    bruger_id INT(6) UNIQUE PRIMARY KEY, 
    brugerNavn VARCHAR(30) NOT NULL,
    formue FLOAT(53,2)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table Bruger created successfully<br>";
    } else {
       echo "Error creating table: <br>" . $conn->error;
 }
if(!empty($_GET["bnavn"])){
$sql = "INSERT INTO aktiespil.Bruger(bruger_id, brugerNavn, formue) 
VALUES (' ".$_GET["uBrugerID"]." ' , ' ".$_GET["bnavn"]." ' , ' ".$_GET["formue"]." ')";
}
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id ;"<br>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$_SESSION["brugerID"] = "uBrugerID";

$conn->close();
/*
header("location:../../index.php");
*/
?>
   
