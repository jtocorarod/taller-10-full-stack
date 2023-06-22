<?php

$errorMessage = "";
$userName = "";
$userLastName = "";
$userId = "";

if (isset($_GET["user_name"]) && isset($_GET["user_lastName"]) && isset($_GET["user_id"])) {

    $userName = $_GET["user_name"];
    $userLastName = $_GET["user_lastName"];
    $userId = $_GET["user_id"];
}

?>


