<?php 
require "AdminLogin.php";//skal ændres til login.php eller noget ligne 
$letter='h';
include "sql.php";
$result = sqlComand($conn,$letter);
foreach($result as &$row) {
    echo "Titel: " . $row["Titel"].  "<br>";
}
?>