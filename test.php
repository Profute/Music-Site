<?php 
require "AdminLofin.php";

$sql = "SELECT Titel FROM Album WHERE LOWER(LEFT(Titel,1) = 'b')";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Titel: " . $row["Titel"].  "<br>";
    }
} else {
    echo "0 results";
}
?>