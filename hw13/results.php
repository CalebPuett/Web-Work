<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href = "assets/css/bootstrap.css" rel = "stylesheet"/>
<link href = "assets/css/bootstrap-theme.css" rel = "stylesheet"/>
<title>Contact</title>
</head>
	<body>
	<div style = "background-color: #1F77FF ; padding: 5px"><h1>Welcome to My Content Page!</h1></div>
	<ul class="nav nav-tabs">
		
		<li  role="presentation" ><a href= "index.php">Home</a></li>
		<li role="presentation"><a href = "school.php">School</a></li>
		<li role="presentation"><a href = "work.php">Work</a></li>
		<li role="presentation"><a href = "hobbies.php">Hobbies</a></li>
		<li role="presentation"> <a href = "sports.php"> Sports</a></li>
		<li role="presentation" class="active"><a href = "contact.php">Contact</a> </li>
	
	</ul>

	<?php

		$username = "webuser";
		$password = "kcJl6@R71a6Jaz@5";
		$db = "contact_data";
		$hostname = "localhost";
		$dblink = new mysqli($hostname,$username,$password,$db);
		$sql = "Select * from `entries`";
		$results=$dblink->query($sql) or die("Something went wrong with: $sql<br>".$dblink>error);
		echo '<h3> Database Entries</h3>';
		echo '<table cellpadding= "10px" width="100%">';
			echo '<tr bgcolor = #1F77FF>';
			echo '<td> ID </td>';
			echo '<td> First Name </td>';
			echo '<td> Last Name </td>';
			echo '<td> Email </td>';
			echo '<td> Phone Number </td>';
			echo '<td> Comments </td>';
			echo '</tr>';
			
		while($data=$results->fetch_array(MYSQLI_ASSOC)){
			echo "<tr>";
			
			echo "<td> $data[auto_id]</td>";
			echo "<td> $data[first_name]</td>";
			echo "<td> $data[last_name]</td>";
			echo "<td> $data[email]</td>";
			echo "<td> $data[phone]</td>";
			echo "<td> $data[comments]</td>";
			echo "</tr>";
		}
		echo '</table>';
		?>
		</div>
</body>
</html>


