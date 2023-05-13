<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href = "assets/css/bootstrap.css" rel = "stylesheet"/>
<link href = "assets/css/bootstrap-theme.css" rel = "stylesheet"/>
<script src = "assets/js/jquery-3.5.1.js"></script>
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
<div class= "panel panel-default">
<div class = "panel-body">
<?php
	echo '<h3 align="center">Contact Form Data Results</h3>';
	echo '<table border = "1" width = "100%">';
	echo '<tr>';
	echo '<th>Record #</th><th>First Name</th><th>Last name</th><th>Email</th><th>Phone</th><th>Comments</th>';
	echo '</tr>';
	echo '<tbody id = "results">';
	echo '</tbody>';
	echo '</table>';
	?>
	
	
	</div>		
</div>
		
</body>
</html>
<script>
	function refresh_table(){
		$.ajax({
			type:'post',
			url: 'https://ec2-18-216-169-176.us-east-2.compute.amazonaws.com/hw15/query.php',
			success: function(data){
				$('#results').html(data);
			}
			
		});
	};
	setInterval(function(){ refresh_table();  }, 500);


</script>


