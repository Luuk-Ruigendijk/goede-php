<?php

	date_default_timezone_set("Europe/Amsterdam");
	

	$hour = date("H");

	$time = date("H:i");

	if ($hour < 6) {
		$class = "nacht";
	}

	if ($hour >=6 && $hour <12) {
		$class = "morgen";
	}

	if ($hour >=12 && $hour <18) {
		$class = "middag";
	}

	if ($hour >=18) {
		$class = "avond";
	}
	


?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="backgrounds.css">
		<title>het uur is: <?=$hour?></title>
	</head>
	<body class="<?php print($class) ?>">
		<h1>Goede <?=$class?></h1>
		<h2>het is nu <?=$time?></h2>
	</body>
</html>