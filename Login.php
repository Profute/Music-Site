<?Php
session_start();
$_SESSION["Welcome"] = true;
$_SESSION["brugerID"] = "uBrugerID";
$servername = "localhost";
$dbname = "Music_Site";
//Starter en session og definerer databasensnavn og servernavent

//Afhængigt af hvad username og password angiver den hvilken bruger er logget ind
if($_SESSION["Welcome"] = true){
	$username = 'peasant';
	$password = 1234;
} else {
	$username = $_POST["UName"];                  
	$password = $_POST["PWord"];  
}

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Login failed: " . $conn->connect_error);
    header("Location : http://localhost/Music-Site/pages/index.php");
    
} 
echo "Login successfully <br>";
