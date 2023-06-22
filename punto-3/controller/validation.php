<?php

$errorMessage = "";
$userName = "";
$userLastName = "";
$userId = 0;

if (isset($_GET["user_name"]) && isset($_GET["user_lastName"]) && isset($_GET["user_id"])) {
    $userName = $_GET["user_name"];
    $userLastName = $_GET["user_lastName"];
    $userId = intval($_GET["user_id"]);

    if (!is_numeric($userId)) {
        $errorMessage = "La Cédula solo acepta caracteres numéricos.";
    }

}
?>


