<?php

//required statements
require_once(__DIR__ . "/database.php");
session_start();
session_regenerate_id(true);
//where the project is located
$path = '/ChrisGAwesomenauts/php/';

//settings for logging in 
$host = "localhost";
$username = "root";
$password = "root";
$database = "awesomenauts_db";

if (!isset($_SESSION["connection"])) {
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}