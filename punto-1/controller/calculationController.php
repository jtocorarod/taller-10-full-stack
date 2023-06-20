<?php
include "./controller/calculationUtilsController.php";

$result = 0;
$messageError = "";


    if (isset($_POST["first_number"]) && isset($_POST["second_number"])) {
        $firstNumber = $_POST["first_number"];
        $secondNumber = $_POST["second_number"];

        if (is_numeric($firstNumber) && is_numeric($secondNumber)) {
            $firstNumber = intval($firstNumber);
            $secondNumber = intval($secondNumber);

            $operation = $_POST["operation_type"];

            switch ($operation) {
                case 1:
                    $result = add($firstNumber, $secondNumber);
                    break;
                case 2:
                    $result = subs($firstNumber, $secondNumber);
                    break;
                case 3:
                    $result = mult($firstNumber, $secondNumber);
                    break;
                case 4:
                    if ($secondNumber != 0) {
                        $result = div($firstNumber, $secondNumber);
                    } else {
                        $messageError = "No es posible dividir entre cero.";
                    }
                    break;
                default:
                    $messageError = "Operación inválida.";
                    break;
            }
        } else {
            $messageError = "Los valores ingresados deben ser números.";
        }
    }

?>
