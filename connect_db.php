<?php
	$conn =
	mysqli_connect('localhost','user','password','Music_Site.db')
	OR die (mysqli_connect_error() );
	mysqli_set_charset( $conn , 'utf-8' );
?>