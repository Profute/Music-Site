<?Php
session_start();
$_SESSION["Welcome"] = true;

$servername = "localhost";
$dbname = "Music_Site";  
$username = $_GET["bNavn"];                  
$password = $_GET["pword"];  
// Create connection



// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Login failed: " . $conn->connect_error);
    header("Location : http://localhost:8000/MUSIC-SITE/index.php");
    
} 
echo "Login successfully <br>";

