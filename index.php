
<!DOCTYPE html>
<html>
<head>
	<title>php tutorl</title>
</head>
<body>
	<form method="GET">
		<input type="text" name="person">
		<button>SUMMIT</button>
	</form>
	<div style="margin-top: 50px;margin-bottom: 50px"> break to new object </div>
	<form method="GET">
		<input type="text" name="fristNumber" placeholder="Number 1">
		<input type="text" name="secondNumber" placeholder="Number 2">
		<select name="operator">
			<option>None</option>
			<option>Add</option>
			<option>Subtract</option>
			<option>Mutiply</option>
			<option>Divide</option>
		</select>
		<br>
		<button type="submit" name="submit" value="submit">Calculate</button>
	</form>
	<p>The anser is: </p>
	<?php

		if(isset($_GET['submit'])){
			$result1 = $_GET['fristNumber'];
			$result2 = $_GET['secondNumber'];
			$operator = $_GET['operator'];
			switch ($operator) {
				case "None":
					echo "You need too select somthing";
					break;
				case "Add":
					echo $result1 + $result2;
					break;
				case 'Substract':
					echo $result1 - $result2;
					break;
				case 'Mutiply':
					echo $result1 * $result2;
					# code...
					break;
				case 'Divide':
					echo $result1 / $result2;
					# code...
					break;
				default:
					echo "Do nothing";
					break;
			}
		}
		echo "<br>";
		/*
		Calculate
		*/
		$name = "tony";
		$nameinput = $_GET['person'];
		echo "hello world echo";
		echo "<br>";
		print "hello world print";
		echo "<br>";
		echo "hello ".$name. "noi chuoi like that";
		echo "<br>";
		echo "Hello ".$nameinput." like that";echo "<br>";
		echo strlen("count string length");echo "<br>";
		echo str_word_count("count word");echo "<br>";
		echo strrev("reverser");echo "<br>";
		echo strpos("i am a student", "am");echo "<br>";	
		echo str_replace("Tony", "hy", "Hi Tony");echo "<br>";
		$namearray = array("tony","hy","bob");
		echo $namearray['2'];
	?>
	<a href="secondpage.php">go to second page </a>
	<br>
	<a href="scope.php">go to scope </a>
</body>
</html>