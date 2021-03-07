<?php

	

	if(isset($_POST["email"]) && isset($_POST["psw"])) {
		$email = $_POST["email"];
		$psw = $_POST["psw"];

		echo "Hi $email, <br><br>" . " welcome to our page ";
	}
?>