<?php
function getAllAlbums($conn,$letter)
{
$sql = "SET @letter = '" . $letter . "'; SELECT Titel, AlbumId FROM Album WHERE LOWER(LEFT(Titel,1)) = @letter";
if ($result=mysqli_multi_query($conn,$sql)) {
    do{
        if ($result=mysqli_store_result($conn)){

                while($row=mysqli_fetch_assoc($result)) {
                    $array1[]=$row;     
                }
        }
    } while(mysqli_more_results($conn) && mysqli_next_result($conn));
} else {
    echo "0 results <br>";
    echo  $conn->error;
}
if(!$result){
    echo "0 results <br>";
    echo  $conn->error;
}
echo(json_encode($result));
echo(json_encode($array1));
return $array1;
}
function getAlbum($conn,$AlbumId)
{
$sql = "SET @AlbumId = (". $AlbumId ."); SELECT * FROM Album WHERE AlbumId = @AlbumId";
if ($result=mysqli_multi_query($conn,$sql)) {
    do{
        if ($result=mysqli_store_result($conn)){

                while($row=mysqli_fetch_assoc($result)) {
                    $array1[]=$row;     
                }
        }
    } while(mysqli_more_results($conn) && mysqli_next_result($conn));
} else {
    echo "0 results <br>";
    echo  $conn->error;
}

//echo(json_encode($array1));
return $array1;
}
function getDetails($conn,$NummerId,$ArtistId)
{
$sql = "SET @NummerId = (". $NummerId ."); SELECT * FROM nummer WHERE NummerId = @NummerId";

if ($result=mysqli_multi_query($conn,$sql)) {
    do{
        if ($result=mysqli_store_result($conn)){

                while($row=mysqli_fetch_assoc($result)) {
                    $array1[]=$row;     
                }
        }
    } while(mysqli_more_results($conn) && mysqli_next_result($conn));
} else {
    echo "0 results <br>";
    echo  $conn->error;
}
$sql = "SET @ArtistId = (". $ArtistId ."); SELECT * FROM artist WHERE ArtistId = @ArtistId";

if ($result=mysqli_multi_query($conn,$sql)) {
    do{
        if ($result=mysqli_store_result($conn)){

                while($row=mysqli_fetch_assoc($result)) {
                    $array2[]=$row;     
                }
        }
    } while(mysqli_more_results($conn) && mysqli_next_result($conn));
} else {
    echo "0 results <br>";
    echo  $conn->error;
}
//echo(json_encode($array1));
return array($array1, $array2);
}
?>