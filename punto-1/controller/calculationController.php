
<?php

include "./controller/calculationUtilsController.php";

$result = 0;

    if (isset($_POST["first_number"]) && isset($_POST["second_number"])){

        $firstNumber = intval($_POST["first_number"]);
        $secondNumber = intval($_POST["second_number"]);

    $operation = $_POST["operation_type"];

    switch ($operation){
        case 1:
            $result = add($firstNumber,$secondNumber);
            break;

    }

    }else {
        $messageError = "Ingrese alguna monda";
    }



?>