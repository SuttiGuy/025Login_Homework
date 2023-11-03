<?php
require 'Login.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = new Login('localhost', 'authuser', 'root', '');

    if ($login->authenticate($username, $password)) {
        echo "Lucky you Log in successful =_= !";
        // Redirect or set session variable here
    } else {
        echo "Unfortunately you Failed to Log in. -_-!!!";
        echo $username;
        echo $password;
    }
}
