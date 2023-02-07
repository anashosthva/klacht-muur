<meta http-equiv="refresh" content="0; url=index.php">
<?php
	include("connect.php");

	$afkorting = mysqli_real_escape_string($connection, $_POST['afkorting']);
	$klacht = mysqli_real_escape_string($connection, $_POST['klacht']);
	
	$query = "INSERT INTO mk(afkorting, klacht) VALUES('$afkorting', '$klacht')";
	$result = mysqli_query($connection, $query);
	echo "De gegevens zijn opgeslagen";
?>