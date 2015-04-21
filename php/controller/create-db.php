<?php

//required statements
require_once(__DIR__ . "/../model/config.php");

//codes for creating new post
$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");

if ($query) {
    echo "<p>Succesfully create table: posts</p>";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
//codes for creating new users
$query = $_SESSION["connection"]->query("CREATE TABLE users ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "username varchar(30) NOT NULL,"
        . "email varchar(50) NOT NULL,"
        . "password char(128) NOT NULL,"
        . "salt char(128) NOT NULL,"
        . "PRIMARY KEY (id))");

if ($query) {
    echo "<p>Sucessfully created table: users</p>";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}