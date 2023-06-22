<?php include "./controller/calculationDates.php" ?>

<form action="" method="post">

    <h2>Calcula si eres mayor de Edad </h2>
    <div class="form__row">
        <div>
            <label for="birthday-user">Fecha de nacimiento</label>
                <input
                id="birthday-user" 
                type="date" 
                name="birthday_user"
                placeholder = "03/06/1988" 
                >
        </div>  
    </div>
    <button>Calcular</button>
</form>