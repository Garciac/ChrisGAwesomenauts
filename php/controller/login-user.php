<?php

//required statement
require_once(__DIR__ . "/../model/config.php");

$array = array(
    'exp' => "",
    'exp1' => "",
    'exp2' => "",
    'exp3' => "",
    'exp4' => "",
);

//username and password settings to login to your account
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$query = $_SESSION["connection"]->query("SELECT * FROM users WHERE username = '$username'");

// it tells you if your login was sucessful or invalid
if ($query->num_rows == 1) {
    $row = $query->fetch_array();

    if ($row["password"] === crypt($password, $row["salt"])) {
        $_SESSION["authenticated"] = true;
        header("Location: " . $path . "index.php");
    } else {
        header("Location: " . $path . "login.php");
        echo "<p>Invalid username and password</p>";
    }
} else {
    echo "<p>Invalid username and password</p>";
}
    