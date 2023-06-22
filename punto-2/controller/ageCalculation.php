<?php
$ageMessage = "";
$ageUser = 0;
$nameUser = "";

if ((isset($_POST["name_user"]) && (isset($_POST["age_user"])))){

    $ageUser= $_POST["age_user"];
    $nameUser= $_POST["name_user"];

    if(($nameUser != "") && ($ageUser != "")){

        if (is_numeric($ageUser)){      
            $ageUser= intval($ageUser);

                if($ageUser >= 18) 
                    {
                        $ageMessage = $nameUser." eres mayor de edad";
                    }
                        else{
                            $ageMessage = $nameUser." no eres mayor de edad";
                        }                   
        }else{
            $messageError = "Los valores ingresados en la edad deben ser númericos.";
            }

        }else{
            $messageError = "Los valores estan vacios";
            }
    }


?>