<?php
    


?>  





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulario</h2>
   <form action="formulario.php" method="POST">
        <input type="hidden" name="paso" value="1" />
        <?php echo $errores; ?>

        <div class="campo">
            <label class="<?php echo $error_nombre; ?>" for="nombre">Nombre Usuario:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre..."> 
        </div>

        <div class="campo">
            <label class="<?php echo $error_email; ?>" for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="E-mail..."> 
        </div>

        <div class="campo">
            <label class="<?php echo $error_edad; ?>" for="edad">Teléfono:</label>
            <input type="text" id="edad" name="edad" value="<?php echo $edad; ?>" placeholder="Edad..."> 
        </div>
        <div class="campo">
            <label class="<?php echo $error_pais; ?>" for="pais">Teléfono:</label>
            <input type="text" id="pais" name="pais" value="<?php echo $pais; ?>" placeholder="País..."> 
        </div>
        <div class="campo">
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>