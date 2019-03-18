<?php
session_start();
require "Login.php";
$sql = "SELECT brugerNavn, formue FROM bruger WHERE bruger_id = '".$_SESSION["brugerID"]."'";

$resultat = $conn->query($sql);

if ($resultat->num_rows >0) {
    while($row = $resultat->fetch_assoc()) {
        echo $row["brugerNavn"] . $row["formue"] . " kr.";
    }
}
                  
?>
<form action="koeb.php">
<input type="submit" value="Gå til køb">
</form>

<form action="saelg.php">
<input type="submit" value="Gå til salg">
</form>