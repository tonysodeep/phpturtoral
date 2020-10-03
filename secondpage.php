<!DOCTYPE html>
<html>
<head>
	<title>secondpage</title>
</head>
<body>
	<?php
		$dateofweek = date("w");
		echo $dateofweek; echo "<br>";
		$array = array("Tony","hy","nig");
		foreach ($array as $loopdata) {
			echo "My name is ".$loopdata." cool?"."<br>";
		}
	?>
</body>
</html>