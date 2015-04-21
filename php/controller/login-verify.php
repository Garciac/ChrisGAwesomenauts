<?php

//required statement
require_once(__DIR__ . "/../model/config.php");

//tells you if you logged in successfully or didn't successfully logged in
function authenticateUser() {
    if (!isset($_SESSION["authenticated"])) {
        return false;
    } else {
        if ($_SESSION["authenticated"] != true) {
            return false;
        } else {
            return true;
        }
    }
}
