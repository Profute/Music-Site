<!DOCTYPE html>
<head>
        
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
<?php
function details($conn,$NummerId,$ArtistId){
   // getAlbum($conn,$AlbumId);
    //echo(json_encode(getAlbum($conn,$AlbumId)));
    $detailsResult = getDetails($conn,$NummerId,$ArtistId);
    
    
    $numberDetails = $detailsResult[0];
    $artistDetails= $detailsResult[1];


    foreach($numberDetails as &$row){
        echo "<a class=\"layout\"Title: " . $row["Title"] . "<br> Lyric: " . $row["Lyric"] . "</a>";
    }
    foreach($artistDetails as &$row){
        echo "<a class=\"layout\" Artist Navn: " . $row["ArtistNavn"] . "</a> ";
    }
}
?>
<?php
function albumdetails($conn,$AlbumId){
   // getAlbum($conn,$AlbumId);
    //echo(json_encode(getAlbum($conn,$AlbumId)));
    $albumResult = getAlbum($conn,$AlbumId);
    foreach($albumResult as &$row){
        echo "<a class=\"layout\" href=\"?nummer=" . urlencode($row["NummerID"]) .  "&artist=" . urlencode($row["Artistid"]) .  "\">" . $row["Titel"] . "</a>";
    }
}
?>
<html><body>
<?php 
require "Login.php";
include "sql.php";
$result = getAllAlbums($conn,$letter);
foreach($result as &$row) {
    echo "<a class=\"layout\" href=\"?album=" . urlencode($row["AlbumId"]) .  "\">" . $row["Titel"] . "</a>";
}
?>
<?php 
if(isset($_GET['album'])) $linkchoice=$_GET['album'];
else $linkchoice='';

if($linkchoice!=''){
    albumdetails($conn,(int)$linkchoice);
}
?>
<?php 
if(isset($_GET['nummer']) & isset($_GET['artist']))
{

    $linknumber=$_GET['nummer'];
    $linkartist=$_GET['artist'];
}
else {
    $linknumber='';
    $linkartist='';
}

if($linknumber!='' & $linkartist!=''){
    details($conn,(int)$linknumber,(int)$linkartist);
}
?>
</body></html>