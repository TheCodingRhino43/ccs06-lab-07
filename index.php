<?php

// 1. What does this function session_start() do to the application?
// This function does is entering the user into a session; meaning that they're about to
// enter a registration state to open up regarding about the file. 

require "vendor/autoload.php";
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>

	<h1>Analogy Exam Registration</h1>
	<h3>Kindly register your basic information before starting the quiz.</h3>

	<form method="POST" action="register.php">
		Enter your full name:<br />
		<input type="text" name="fullname" placeholder="Full Name" required />
		<br />
        Birthdate <br />
        <input type="date" id="birthdate" name="birthdate">
        <br />
        Email: <br />
        <input type="email" id="email" name="email">
        <br />
		<button type="button">Register</button>
	</form>

</body>
</html>

<pre>
<?php
var_dump($_SESSION);
?>
</pre>