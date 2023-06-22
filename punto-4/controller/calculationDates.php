<?php

include "./controller/utilsCalculationDates.php";

$messageError = "";
$ageMessage="";
$ageUser =null;

if (isset($_POST["birthday_user"])){
    
    $birthday = $_POST["birthday_user"];
    $currentDate = date('Y-m-d');
    $ageUser = ageCalculation($birthday, $currentDate);

        if(!empty($birthday)){
                if($ageUser>=18){
                        $ageMessage="Su edad es " .$ageUser." por tanto: Es mayor de edad";
                }else{
                 $ageMessage="Su edad es " .$ageUser." por tanto: No es mayor de edad";    
                }
        }else{
                $messageError = "Los valores estan vacios";
        }            
 }

?>