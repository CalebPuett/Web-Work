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
<div>
	<?php
	if (!isset($_POST['submit']))
		{
	echo '<form action = "" method = "post">';
	echo '<p>First Name: ';
	echo '<input type = "text" name = "firstname"/>';
	echo	'</p>';
	echo '<p>Last Name: ';
	echo '	<input type = "text" name = "lastname"/>';
	echo  '</p>';
	echo '<p>Email: ';
	echo '	<input type="text" name = "email"/>';
	echo '	</p>';
	echo '<p>Phone Number: ';
	echo '<input type= "text" name= "phone"/>';
	echo '</p>';
	echo '<p> Comments: ';
	echo '	<input type="text" name = "comments"/>';
	echo '	</p>';
	echo '<p><button type="submit" name="submit" value="submit">Submit</button></p>';
	echo '</form>';
		}
	if (isset($_POST['submit']) && $_POST['submit'] == "submit")
	{
		$firstname = addslashes($_POST['firstname']);
		$lastname = addslashes($_POST['lastname']);
		$email = addslashes($_POST['email']);
		$phone = addslashes($_POST['phone']);
		$comments = addslashes($_POST['comments']);
		echo '<h3>Data Recived </h3>';
		echo "<p>First Name: $firstname</p>";
		echo "<p>Last Name: $lastname</p>";
		echo "<p>Email: $email </p>";
		echo "<p>Phone Number: $phone</p>";
		echo "<p>Comments: $comments</p>";
		$username = "webuser";
		$password = "kcJl6@R71a6Jaz@5";
		$db = "contact_data";
		$hostname = "localhost";
		$dblink = new mysqli($hostname,$username,$password,$db);
		$sql = "Insert into `entries` (`first_name`,`last_name`,`email`,`phone`,`comments`)values('$firstname','$lastname','$email','$phone','$comments')";
		$dblink->query($sql) or die("Something went wrong with: $sql<br>".$dblink>error);
		echo '<h3> Data entered into Database successfully!</h3>';
	}
		?>
		</div>
</body>
</html>


