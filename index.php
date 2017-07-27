<!DOCTYPE html>
<html>
<head>
<!-- CSS FILES -->
<link rel="stylesheet" href="css/main.css"/>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Lobster" rel="stylesheet"> 

</head>


<body>
<hr>
	
	<div class="myDiv" align="center">


	<?php echo date('d/m/Y'); ?> <br>
	<img src="logo.png">
		<h1>The King's High School</h1>
			<form action="check.php">
				<table>
					  <tr>
						<th>Names</th>
						<th>Duty</th>
						<th>Status</th>
					  </tr>
					  <tr>
						<td>Seun Daramola</td>
						<td>Co-ordinate the Class</td>
						<td><input type="checkbox"></td>
					  </tr>
					  <tr>
						<td>Emeka Bright</td>
						<td>Sweep Classroom</td>
						<td><input type="checkbox"></td>
					  </tr>
					  <tr>
						<td>Obinna Akunne</td>
						<td>Wash the toilet</td>
						<td><input type="checkbox"></td>
					  </tr>
					  <tr>
						<td>Ebenezer Obey</td>
						<td>Clean the Board</td>
						<td><input type="checkbox"></td>
					  </tr>
				</table><br>

				<button id="myBtn">Submit Roster</button>
			</form>
		<hr>
			
		</div>
</body>

</html> 