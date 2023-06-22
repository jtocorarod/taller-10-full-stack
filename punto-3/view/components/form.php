<?php include "./controller/validation.php"; ?>

<form action="./view/pages/user-info.php" method="get">
    <h2>Captura de datos</h2>
        <div>
            <div>
                <label for="user-name">Nombre:</label>
                <input id="user-name" type="text" name="user_name" placeholder="Johann" required>
            </div>

            <div>
                <label for="user-lastName">Apellido:</label>
                <input id="user-lastName" type="text" name="user_lastName" placeholder="Tocora"  required>
            </div>

            <div>
                <label for="user-id">Cédula:</label>
                <input id="user-id" type="text" name="user_id" placeholder="1030555876" required>
            </div>
            <button>Registrar</button>
        </div>
        
</form>