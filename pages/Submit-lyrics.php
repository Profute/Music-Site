<!DOCTYPE html>
<html>
	<head>
		
		<title> Submit Lyrics </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>

	<body>
		<ul>
			<li> <a href="http://localhost/Music-Site/pages/index.php">Home</a></li>
			<li> <a href="http://localhost/Music-Site/pages/site.php"> # </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteA.php"> A </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteB.php"> B </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteC.php"> C </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteD.php"> D </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteE.php"> E </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteF.php"> F </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteG.php"> G </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteH.php"> H </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteI.php"> I </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteJ.php"> J </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteK.php"> K </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteL.php"> L </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteM.php"> M </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteN.php"> N </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteO.php"> O </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteP.php"> P </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteQ.php"> Q </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteR.php"> R </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteS.php"> S </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteT.php"> T </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteU.php"> U </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteV.php"> V </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteW.php"> W </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteX.php"> X </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteY.php"> Y </a> </li>
			<li> <a href="http://localhost/Music-Site/pages/siteZ.php"> Z </a> </li>
			<li> <a class="current" href="http://localhost/Music-Site/pages/Submit-lyrics.php"> Submit Lyrics </a> </li>
			<li style="float: right"> <a href="http://localhost/Music-Site/pages/loginSite.php"> Login </a> </li>
		</ul>
		
		<div class="lyrics">
			<form method="post" action="insert.php">
			
				<h1 class="title"> Add Lyrics </h1>
				
				<div class="input-group"> <h2>
					<label> Song Name </label> <br>
					<input style="width:85%" type="text" name="SName"> 
				</div> </h2>
				
				<div class="input-group"> <h2>
					<label> Artist Name </label> <br>
					<input style="width:85%" type="text" name="AName"> 
				</div> </h2>
				
                <div class="input-group"> <h2>
					<label> Album Name </label> <br>
					<input style="width:85%" type="text" name="AlName"> 
                </div> </h2>
				
				<div class="input-group"> <h2>
					<label> Lyrics </label> <br>
					<textarea spellcheck="true" class="add_lyrics_textarea" name="LName"></textarea>
				</div> </h2>
				
                <div class="input-group">
					<button type="text" name="submit-lyrics" class="btn"> Submit Lyrics </button>
				</div> 
		</div>
		
	</body>
</html>