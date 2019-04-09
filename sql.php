<?php
function sqlComand($conn,$letter)
{
$sql = "SELECT Titel FROM Album WHERE LOWER(LEFT(Titel,1)) = '" . $letter . "'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    do{
        while($row=mysqli_fetch_assoc($result)) {
            $array1[]=$row;     
        }      
    } while(mysqli_more_results($conn) && mysqli_next_result($conn));
} else {
    echo "0 results <br>";
    echo  $conn->error;
}

//echo(json_encode($array1));
return $array1;
}
?>