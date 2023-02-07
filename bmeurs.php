<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>beheerder</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
      <div class= "klaag"><h2>Beheerder is ingelogd</h2> </div>
	 <div class= "klaag"><h3>Lijst van klachten</h3> </div>
<div class="table-wrapper">
    <table class="fl-table">

      <thead>
		
			<th>Afkorting</th>
			<th>Klacht</th>
			<th>Datum</th>
			<th>Verwijder</th>
		</thead>
        <tbody>
			<?php
			$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
			$cleardb_server = $cleardb_url["host"];
			$cleardb_username = $cleardb_url["user"];
			$cleardb_password = $cleardb_url["pass"];
			$cleardb_db = substr($cleardb_url["path"],1);
			$active_group = 'default';
			$query_builder = TRUE;
			$connection = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
			
			if ($connection->connect_error) {
				die ("Connection failed: " . $connection->connect_error);
			}

			$sql = "SELECT * FROM mk ORDER BY
				afkorting, datum DESC";
         
			$result = $connection->query($sql);

			if (!$result) {
				die ("invalid query: " . $connection-> error);
			}

			while ($row = $result->fetch_assoc()) {
				echo " 
				<tr>
			
				<td>$row[afkorting]</td>
				<td>$row[klacht]</td>
				<td>$row[datum]</td>
				<td>
					<a class='del' href='delete.php?id=$row[id]'>Delete</a>
				</td>
			</tr>
				";
			}
           
			?>
			
		</tbody>
	</table>
  <form action="index.php">
    <input type="submit" value="Terug naar voorpagina" />
</form>
  </div>
</body>
</html>