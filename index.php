<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>www.klaagmuur.nl</title>
	<link rel="stylesheet" href="style.css">
</head>
	<body>
      <div class= "klaag"><h1>De Klaagmuur</h1> </div>
		 <div class= "klaag"><h3>Lijst van klachten</h3> </div>
			<div class="table-wrapper">
    <table class="fl-table">
      <thead>
              <tr>
					<strong>
						
						<th>Afkorting</th>
						<th>Klacht</th>
					</strong>
				</tr>
      </thead>
            

			<?php
				$query = "SELECT  afkorting, klacht FROM mk ORDER BY
				afkorting, datum DESC";
				$result = mysqli_query($connection, $query);
				while ($row = mysqli_fetch_array($result)) {
			?>
             
				<tr>
					
					<td><?php echo $row["afkorting"]; ?></td>
					<td><?php echo $row["klacht"]; ?></td>
				</tr>
          
			<?php
				}
			?>
			</table>
      
     
            <form action="inlog.php">
    <input type="submit" value="Klacht toevoegen" />
</form>
     </div>

			
	</body>
</html>