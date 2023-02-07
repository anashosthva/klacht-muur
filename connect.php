<?php
	
	// $host = "localhost";
	// $username = "masa_klacht";//vul hier je gebruikersnaam in
	// $password = "6345696";//vul hier je wachtwoord in
	// $db = "masa_klacht";//vul hier je databasenaam in

	//Get Heroku ClearDB connection information
	$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$cleardb_server = $cleardb_url["host"];
	$cleardb_username = $cleardb_url["user"];
	$cleardb_password = $cleardb_url["pass"];
	$cleardb_db = substr($cleardb_url["path"],1);
	$active_group = 'default';
	$query_builder = TRUE;


	$connection = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db) 
	or die("Verbinding mislukt vanwege:" . mysqli_connect_error($connection));

?>