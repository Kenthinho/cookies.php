<?php

	setcookie("email", "", time()+30*24*60*60);

	if(isset($_POST["email"]) && isset($_POST["psw"])) {
		$email = $_POST["email"];
		$psw = $_POST["psw"];

		echo $email . " " . $psw;
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Page</title>
		<style>
			* {box-sizing: border-box}

			input[type=text], input[type=password] {
				width: 100%;
				padding: 15px;
				margin: 5px 0 22px 0;
				display: inline-block;
				border: none;
				background: #f1f1f1;
			}

			input[type=text]:focus, input[type=password]:focus {
				background-color: #ddd;
				outline: none;
			}

			hr {
				border: 1px solid #f1f1f1;
				margin-bottom: 25px;
			}

			/* Set a style for all buttons */
			button {
				background-color: #4CAF50;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: 100%;
				opacity: 0.9;
			}

			button:hover {
				opacity:1;
			}

			.loginbtn {
				float: left;
				width: 10%;
			}

			.container {
				padding: 16px;
			}

			.clearfix::after {
				content: "";
				clear: both;
				display: table;
			}
		
		</style>
	</head>
	<body>
		<form action="validate.php" method ="POST" style="border:1px solid #ccc">
		<div class="container">
			<h1>Login Form</h1>
			<hr>

			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required><label>

			<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
			</label>

			<p>Not a user yet <a href="action_page.php" style="color:dodgerblue">Sign Up</a>.</p>

			<div class="clearfix">
			<button type="submit" class="loginbtn">Login</button>
			</div>
		</div>
		</form>
		
	</body>
</html>






