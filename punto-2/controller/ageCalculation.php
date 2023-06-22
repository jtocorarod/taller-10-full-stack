<?php
$ageMessage = "";
$ageUser = 0;

if (isset($_POST["age_user"])){

    $ageUser= $_POST["age_user"];

    if($ageUser != ""){

        if (is_numeric($ageUser)){      
            $ageUser= intval($ageUser);

                if($ageUser >= 18) 
                    {
                        $ageMessage = "Es mayor de edad";
                    }
                        else{
                            $ageMessage = "No es mayor de edad";
                        }                   
        }else{
            $messageError = "Los valores ingresados deben ser númericos.";
            }

        }else{
            $messageError = "Los valores estan vacios";
            }
    }


?>