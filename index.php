<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cutie cat</title>
	</head>
	<body>
		<?php 
		$url =  "http://thecatapi.com/api/images/get?api_key=MjI4NDk4&category=space&results_per_page=1";
		$raw = file_get_contents($url);
		echo "<img class='cat' src=".$url."/>";
		?>
	</body>
</html>
