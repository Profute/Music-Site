<?php
function sqlComand($conn,$letter)
{
$sql = "SET @letter = '" . $letter . "'; SELECT Titel FROM Album WHERE LOWER(LEFT(Titel,1)) = @letter";
//$sql = "SELECT Titel FROM Album WHERE LOWER(LEFT(Titel,1)) = '" . $letter . "'";
$result=mysqli_multi_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    do{
        if ($result=mysqli_store_result($conn)){
            while($row=mysqli_fetch_assoc($result)) {
                $array1[]=$row;     
            }     
            mysqli_free_result($conn);
        }
    } while(mysqli_more_results($conn) && mysqli_next_result($conn));
} else {
    echo "0 results <br>";
    echo  $conn->error;
}

echo(json_encode($array1));
return $array1;
}
?>