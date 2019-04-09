<?php
$servername = "localhost"; 
$username = "root";                  
$password = "projectGreen1617"; 
// Create connection
$conn = new mysqli($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
