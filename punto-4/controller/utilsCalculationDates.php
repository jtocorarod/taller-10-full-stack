<?php

function ageCalculation($birthdate,$currentDate){

    $calculationDate = date_diff(date_create($birthdate),date_create($currentDate));
    return $calculationDate -> format('%y');
}

?>