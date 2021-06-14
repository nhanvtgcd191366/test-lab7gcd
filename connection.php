<?php
	#DATABASE CREDENTIAL
	$db_host = "ec2-54-145-102-149.compute-1.amazonaws.com";
	$db_name = "d4cilin91q4mh2";
	$db_user = "nblluecivvscaw";
	$db_password = "893c1f9813b4fd65e41388e9f9d23b297a20589d7840d3e7cca061d28cae1bce";
	$conn_string = "host = $db_host port = 5432 dbname = $db_name user = $db_user password = $db_password";
	$con = pg_connect($conn_string);
	if(!$con)
	{
		die("Failed to connect database");
	}
?>
