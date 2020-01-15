<!DOCTYPE html>
<html lang="en">
<head>
	<title>If_else</title>
	<meta charset="utf-8">
	<style>
		body{
			background-color: beige;
			margin:100px;
		}
		.form{
			max-width: 300px;
			min-height: 400px;
			border: 2px solid black;
			border-radius: 5px;
			background-color: lightgray;
			margin: 0 auto;
		}
		label{
			font-size: 35px;
			font-weight: 900;
			display: block;
			margin-top: 100px;
			margin-left: 70px;
		}
		input[type="text"]{
			width: 95%;
			height: 50px;
			margin-top: 20px;
			margin-left: 5px;
			margin-bottom: 20px;
			font-size: 25px;
			outline-color: black;
			border: 2px solid black;
			border-radius: 5px;
		}
		input[type="submit"]{
			border: none;
			padding: 15px;
			margin-left: 10px;
			font-size: 20px;
			color: white;
			background-color: black;
			border-radius: 20px;
		}
		p{
			font-size: 20px;
			text-align: center;
			background-color: black;
			color: white
		}
	</style>
</head>
<body>
	<h1 style="text-align: center;">Cooking's Days</h1>
	<div class="form">
		<form action="" method="post">
			<label>Enter Day</label>
			<input type="text" placeholder="Enter the day" name="day"/>
			<input type="Submit" name="Submit" value="Submit"/>
		</form>
		


		<?php
if (isset($_POST['Submit'])) {
	$day=$_POST['day'];
	if ($day=="monday") {
		echo "<p>Your meal is Biryani</p>";
		# code...
	}
	elseif ($day=="tuesday") {
		echo "<p>Your meal is Pizaa</p>";
		# code...
	}
	elseif ($day=="wednesday") {
		echo "<p> Your meal is Fries</p>";
		# code...
	}
	elseif ($day=="thursday") {
		echo "<p> Your Meal is Fish</p>";
		# code...
	}
	elseif ($day=="friday") {
		echo "<p>Your Meal is Pasta</p>";
		# code...
	}
	elseif ($day=="saturday") {
		echo "<p>Your meal is Rice</p>";
		# code...
	}
	elseif ($day=="sunday") {
		echo "<p>Your meal is Soup</p>";
		# code...
	}
	else{
		echo "<p>Select day carefully</p>";
	}

	
}
?>

	</div>

</body>
</html>