<?php
function albumdetails($conn,$AlbumId){
   // getAlbum($conn,$AlbumId);
    echo(json_encode(getAlbum($conn,$AlbumId)));

}
?>
<html><body>
<?php 
require "AdminLogin.php";
$letter='h';
include "sql.php";
$result = sqlComand($conn,$letter);
foreach($result as &$row) {
    echo "<br><a href=\"?album=" . urlencode($row["AlbumId"]) .  "\">" . $row["Titel"] . "</a><br>";
}
?>
<?php 
if(isset($_GET['album'])) $linkchoice=$_GET['album'];
else $linkchoice='';

if($linkchoice!=''){
    albumdetails($conn,(int)$linkchoice);
}
?>
</body></html>