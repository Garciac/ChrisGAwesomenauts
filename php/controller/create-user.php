<?php
//required statement
require_once(__DIR__ . "/../model/config.php");

//email, username, password, salt, and Password settings
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

$hashedPassword = crypt($password, $salt);

$query1 = $SESSION["connection"]-> query("SELECT FROM users WHERE USERNAME='$username'");

$query = $_SESSION["connection"]->query("INSERT INTO users SET "
        . "username = '$username',"
        . "password = '$hashedPassword',"
        . "salt = '$salt',"
        . "exp = 0,"
        . "exp1 = 0,"
        . "exp2 = 0,"
        . "exp3 = 0,"
        . "exp4 = 0");

$_SESSION["name"] = $username;

//It tells you that it added your account sucessfully
if ($query) {
    //Need this for Ajax on index.pho
    echo "true";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
} 
