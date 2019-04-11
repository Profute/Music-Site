<html>
<head>
<style type="text/css">

</style>
</head>
<?php
	function albumdetails($conn,$AlbumId){
		$result = getAlbum($conn,$AlbumId);
			foreach($result as &$row) {
				echo "<br><a href=\"?album=" . urlencode($row["Bandid"]) .  "\">" . $row["Titel"] . ", '".$row["Genre"]."' </a><br>";	
			}

	}
?>

<body>
<?php>
echo "<table>";
echo "<tr><th>ID</th><th>hashtag</th></tr>";
while($row = mysql_fetch_row($result))
{
echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$row[0]</td>                <td>$row[1]</td></tr>\n";
}
echo "</table>";
?>
</body>
</html>