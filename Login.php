<?Php
session_start();
$_SESSION["brugerID"] = "uBrugerID";
$servername = "localhost";
$dbname = "aktiespil";  
$username = $_GET["bNavn"];                  
$password = $_GET["pword"];  
// Create connection



// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Login failed: " . $conn->connect_error);
    header("Location : http://localhost/");
    
} 
echo "Login successfully <br>";

