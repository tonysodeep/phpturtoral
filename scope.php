<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Scope</title>
</head>

<body>


<form method="GET">
	<input type="hidden" name="name" value="Tony">
	<button type="submit">Press ME!</button>
</form>
<div style="margin-top: 50px;margin-bottom: 50px"> break to new object </div>
<ul>
	<li><a href="index.php">HOME</a></li>
	<li><a href="secondpage.php">CONTACT</a></li>
</ul>
<?php
	/*
	$_GET & $_POST
	GET see info in url
	POST can't not see
	$_COOKIE end in period time 
	$_SESSION end when web end
	*/

	echo $_GET['name'];
	setcookie("namevar","TonyValue",time() + 86400);
	$_SESSION['userName'] = null;
	echo"<br>";
	echo $_SESSION['userName'];
	if(!isset($_SESSION['userName'])){
		echo "You are not loggin";
	}else{
		echo "You are loggin";
	}
?>
</body>
</html>
