
<?php include "./controller/calculationController.php"; ?>

<form action="" method="post">

    <h2>Calculadora </h2>
    <div class="form__row">
        <div>
            <label for="first-number">Número 1:</label>
                <input
                id="first-number" 
                type="text" 
                name="first_number"
                placeholder = "5" 
                >
        </div>
        <div>
            <label for="second-number">Número 2:</label>
                <input
                id="second-number" 
                type="text" 
                name="second_number"
                placeholder = "5" 
                >    
        </div> 
        <div>
            <label for="operation-type"> Seleccione la operación que desea realizar</label>
               <select name="operation_type" 
               id="operation-type">
                <option value="1">Suma</option>
                <option value="B">Resta</option>
                <option value="C">Multiplicación</option>
                <option value="D">Division</option>
            </select> 
            
        </div>   
    </div>
    
    <button>Calcular</button>

</form>