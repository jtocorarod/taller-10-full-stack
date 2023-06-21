<?php
$ageMessage = "";

if (isset($_POST["age_user"])){

    $ageUser= $_POST["age_user"];

        if (is_numeric($ageUser)){      
            $ageUser= intval($ageUser);

                if($ageUser >= 18) 
                    {
                        $ageMessage = "Eres mayor de Edad";
                    }
                        else{
                            $ageMessage = "Eres menor de Edad";
                        }                   
        }else{
            $messageError = "Los valores ingresados deben ser númericos.";
    
        }
}

?>