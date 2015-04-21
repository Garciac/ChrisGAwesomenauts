<?php
require_once(__DIR__ . "/../model/config.php");

$exp = filter_input(INPUT_POST, "exp", FILTER_SANITZE_STRING);
$exp1 = filter_input(INPUT_POST, "exp1", FILTER_SANITZE_STRING);
$exp2 = filter_input(INPUT_POST, "exp2", FILTER_SANITZE_STRING);
$exp3 = filter_input(INPUT_POST, "exp3", FILTER_SANITZE_STRING);
$exp4 = filter_input(INPUT_POST, "exp4", FILTER_SANITZE_STRING);


$query = $_SESSION["connection"]->query("UPDATE users SET"
        . "exp = $exp,"
        . "exp1 = $exp1, "
        . "exp2 = $exp2, "
        . "exp3 = $exp3, "
        . "exp4 = WHERE username = \"" . $_SESSION["name"]. "\"");