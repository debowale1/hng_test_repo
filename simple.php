<?php


$languages = ['Javascript', 'PHP', 'HTML', 'CSS3', 'Bootstrap', 'Laravel'];
$offset = sizeof($languages) - 1;

$language = rand(0, $offset);




?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple PHP Script</title>
</head>
<body>

	<h2>This Script shows a list of the technologies i use on every reload</h2>
	<p>I am a web developer and i code in: <?= $languages[$language]; ?> </p>	
	

</body>
</html>