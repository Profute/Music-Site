<!DOCTYPE html>
<html>
	<head>
        <title> User Login </title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
	
    <body>
		<ul>
			<li> <a href="http://localhost:8000/Music-Site/index.php"> Home </a></li>
			<li> <a href="http://localhost:8000/Music-Site/pages/site.php"> # </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteA.php"> A </a> </li>
			<li> <a href="http://localhost:8000/Music-Site/pages/siteB.php"> B </a> </li>
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
			<li style="float: right"> <a class="current" href="http://localhost:8000/Music-Site/loginSite.php"> Login </a> </li>
		</ul>
		
        <div class="table">
            <form method="post" action="bruger.php">
				<h1 class="title"> Login </h1>
				
                <div class="input-group"> <h2>
					<label> Username </label> <br>
					<input style="width:75%" type="text" name="UName"> 
                </div> </h2>
				
				<div class="input-group"> <h2>
					<label> Password </label> <br>
					<input style="width:75%" type="password" name="PWord">
				</div> </h2>
				
                <div class="input-group">
					<button type="submit" name="Submit" class="btn"> Log In </button>
				</div> 
				
				
				<h1 class="title"> Create User </h1>
				
				<div class="input-group"> <h2>
					<label> Create Username </label> <br>
					<input style="width:75%" type="text" name="Create-UName">
				</div> </h2>
				
				<div class="input-group"> <h2>
					<label> Create Password </label> <br>
					<input style="width:75%" type="password" name="Create Pword">
				</div> </h2>
				
				<div class="input-group"> <h2>
					<label> Repeat Password </label> <br>
					<input style="width:75%" type="password" name="repeat Pword">
				</div> </h2>
				
				<div class="input-type"> <h2>
					<button type="submit" name="Submit" class="btn"> Create User </button>
				</div> </h2>
				
			</form>
		</div>
		
    </body>
</html>