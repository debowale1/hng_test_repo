<?php
	require 'functions.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Returns all users</title>
</head>
<body>
<?php 

		$query = 'SELECT * FROM users';
		$results = mysqli_query($conn, $query);

		while($row = mysqli_fetch_object($results)){
			
		echo $row->name .' '. $row->email . '<br>';
		}

?>
</body>
</html>