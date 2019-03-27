<!DOCTYPE html>
<html>
    
	<head>
        <title> User Login </title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
	
    <body>
		<ul>
			<li> <a href="http://localhost:8000/Music-Site/index.php">Home</a></li>
			<li style="float: right"> <a class="current" href="http://localhost:8000/Music-Site/loginSite.php"> Login </a> </li>
		</ul>
		
        <div class="table">
            <form method="post" action="bruger.php">
				<h1 class="user"> Login </h1>
				
                <div class="input-group"> <h2>
					<label> Username </label> 
					<input style="width:75%" type="text" name="UName"> 
                </div> </h2>
				
				<div class="input-group"> <h2>
					<label> Password </label>
					<input style="width:75%" type="password" name="PWord">
				</div> </h2>
				
                <div class="input-group">
					<button type="submit" name="Submit" class="login-btn"> Log In </button>
				</div> 
				
				
				<h1 class="user"> Create User </h1>
				
				<div class="input-group"> <h2>
					<label> Create Username </label>
					<input style="width:75%" type="text" name="Create-UName">
				</div> </h2>
				
				<div class="input-group"> <h2>
					<label> Create Password </label>
					<input style="width:75%" type="password" name="Create Pword">
				</div> </h2>
				
				<div class="input-group"> <h2>
					<label> Repeat Password </label>
					<input style="width:75%" type="password" name="repeat Pword">
				</div> </h2>
				
				<div class="input-type"> <h2>
					<button type="submit" name="Submit" class="login-btn"> Create User </button>
				</div> </h2>
			</form>
		</div>
		
    </body>
	
</html>