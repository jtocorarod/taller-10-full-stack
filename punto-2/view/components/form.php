<?php include "./controller/ageCalculation.php"; ?>

<form action="" method="post">

    <h2>Calcula si eres mayor de Edad </h2>
    <div class="form__row">
        <div>
            <label for="name-user" >Ingresa tu Nombre:</label>
                <input
                id="name-user" 
                type="text" 
                name="name_user"
                placeholder = "Johann" 
                >
        </div>  
        <div>
            <label for="age-user" >Ingresa tu Edad:</label>
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