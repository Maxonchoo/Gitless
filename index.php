<!DOCTYPE html>
<html>
	<head>
		<title>less</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php
			/*setlocale(LC_ALL, "russian");
					/*$day = strftime("%d");
					$mon = strftime("%B");
					$year = strftime("%Y");
					echo "$day, $mon, $year";

			$hous = (int) strftime("%H");
			$welcome;

			if ($hous >= 0 && $hous < 6){
				$welcome = "Good night1";
				echo "$welcome";
			}elseif ($hous >= 6 && $hous < 12) {
				$welcome = "Good morning";
				echo "$welcome";
			}elseif ($hous >= 12 && $hous < 18) {
				$welcome = "Good day";
				echo "$welcome";
			}elseif ($hous >= 18 && $hous < 23) {
				$welcome = "Good evening";
				echo "$welcome";
			}else {
				$welcome = "Good night2";
				echo "$welcome";
			}
			*/

			echo ini_get('post_max_size');

			echo "Maxim";
			
		?>		
	</body>	
</html>