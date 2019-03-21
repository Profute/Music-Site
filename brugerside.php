<?php
session_start();
require "Login.php";
$sql = "SELECT brugerNavn, bruger_id FROM bruger WHERE brugerNavn = '".$_SESSION["curentBruger"]."'";

$resultat = $conn->query($sql);

if ($resultat->num_rows >0) {
    while($row = $resultat->fetch_assoc()) {
        echo $row["brugerNavn"];
    }
}
                  
?>
