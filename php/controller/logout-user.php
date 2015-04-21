<?php

//required statement
require_once(__DIR__ . "/../model/config.php");
// this is when you logged out successfully
unset($_SESSION["authenticated"]);
//your account wont be logged in
session_destroy();
header("Location: " . $path . "index.php");

