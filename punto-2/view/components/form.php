<?php include "./controller/ageCalculation.php"; ?>

<form action="" method="post">

    <h2>Calcula si eres mayor de Edad </h2>
    <div class="form__row">
        <div>
            <label for="age-user">Ingresa tu Edad:</label>
                <input
                id="age-user" 
                type="text" 
                name="age_user"
                placeholder = "18" 
                >
        </div>  
    </div>
    <button>Calcular</button>
</form>