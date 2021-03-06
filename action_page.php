<?php
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

			button {
				background-color: #4CAF50;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: 20%;
				opacity: 0.9;
			}

			button:hover {
				opacity:1;
			}

			.cancelbtn {
				padding: 14px 20px;
				background-color: #f44336;
			}

			.cancelbtn, .signupbtn {
				float: left;
				width: 20%;
			}

			.container {
				padding: 16px;
			}

			.clearfix::after {
				content: "";
				clear: both;
				display: table;
			}

			@media screen and (max-width: 300px) {
			.cancelbtn, .signupbtn {
				width: 20%;
			}
			}
		</style>

<form action="login.php" method = "POST" style="border:1px solid #ccc">
	<div class="container">
		<h1>Sign Up</h1>
		<p>Please fill in this form to create an account.</p>
		<hr>

		<label for="fname"><b>Fullname</b></label>
		<input type="text" placeholder="Enter your name" name="fname" required>


		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>
		<div class="clearfix">
			<button type="button" class="cancelbtn">Cancel</button>
			<button type="submit" class="signupbtn">Sign Up</button>
		</div>
</form>