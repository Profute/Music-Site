<!DOCTYPE html>
<html>
	<head>
        <title> User Login </title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
	
    <body>
		<ul>
			<li> <a href="http://localhost:8000/Music-Site/pages/index.php">Home</a></li>
			<li> <a href="http://localhost:8000/Music-Site/pages/site.php"> # </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteA.php"> A </a> </li>
			<li> <a class="current" href="http://localhost:8000/Music-Site/pages/siteB.php"> B </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteC.php"> C </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteD.php"> D </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteE.php"> E </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteF.php"> F </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteG.php"> G </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteH.php"> H </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteI.php"> I </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteJ.php"> J </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteK.php"> K </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteL.php"> L </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteM.php"> M </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteN.php"> N </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteO.php"> O </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteP.php"> P </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteQ.php"> Q </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteR.php"> R </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteS.php"> S </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteT.php"> T </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteU.php"> U </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteV.php"> V </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteW.php"> W </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteX.php"> X </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteY.php"> Y </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteZ.php"> Z </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/Submit-lyrics.php"> Submit Lyrics </a> </li>
			<li style="float: right"> <a href="http://localhost:8000/Music-Site/pages/loginSite.php"> Login </a> </li>
		</ul>
		
    </body>
</html>
<?php 
require "Login.php";//skal ændres til login.php eller noget ligne 
$letter='b';
include "sql.php";
$result = sqlComand($conn,$letter);
foreach($result as &$row) {
    echo "Titel: " . $row["Titel"].  "<br>";
}
?>