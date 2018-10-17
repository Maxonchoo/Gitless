<!DOCTYPE html>
<html>
<head>
	<title>less</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		setlocale(LC_ALL, "russian");
		$day = strftime("%d");
		$mon = strftime("%B");
		$year = strftime("%Y");
		echo "$day, $mon, $year";
	?>
</body>
</html>