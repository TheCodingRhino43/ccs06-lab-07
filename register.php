<?php

require "vendor/autoload.php";

session_start();
// 2. Why do you think the session variable assignments are wrapped inside an if-else and try-catch statements?
// Because the session variable assignments loop statements needed to do so because if anyone wanted to do it
// again, they needed to do this for new users. In doing so, this used a loop statement because it can be repeated,
// making it very versatile. 

try {
    if (isset($_POST['fullname'])) {
        $_SESSION['user_fullname'] = $_POST['fullname'];
        $_SESSION['user_birthdate'] = $_POST['birthdate'];
        $_SESSION['user_email'] = $_POST['email'];

        header('Location: quiz.php');
        exit;
    } else {
        throw new Exception('Missing the basic information.');
    }
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
}