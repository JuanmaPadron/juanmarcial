<?php
    session_start();
    
    $error_nombre = $error_email = $error_edad = $error_pais = false;
    $errores = $hola_nombre = '';
    if(!empty($_GET['paso'])){
        $_SESSION['nombre_usuario'] = $_GET['nombre'];
        $_SESSION['email_usuario'] = $_GET['email'];
        $_SESSION['edad_usuario'] = $_GET['edad'];
        $_SESSION['pais_usuario'] = $_GET['pais'];

        
        if (empty($_POST['nombre'])) {
            $errores = "<span class=\"error\">¡ERROR! No se ha enviado ningún nombre de usuario.<br /></span>";
            $error_nombre = true;
        } else if (!preg_match("/^[a-zA-Z][a-zA-Z0-9_]{4,19}$/", $_POST['nombre_usuario'])) {
            $errores .= "<span class=\"error\">¡ERROR! El nombre de usuario debe empezar con una letra y tener entre 5 y 20 caracteres. Solo se permiten letras, números y guiones bajos.<br /></span>";
            $error_nombre = true;
        }

        if (empty($_POST['email'])) {
            $errores .= "<span class=\"error\">¡ERROR! No se ha enviado ningún E-mail.<br /></span>";
            $error_email = true;
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errores .= "<span class=\"error\">¡ERROR! El formato del E-mail es inválido.<br /></span>";
            $error_email = true;
        }
        $nombre_usuario = $_POST['nombre'];
        $email = $_POST['email'];
        header("location: informacion.php");
        exit();
    }
    

    
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-sm">

    <h2>Formulario</h2>
    <form action="formulario.php" method="GET">
    <?php echo $errores; ?>

        <input type="hidden" name="paso" value="1" />
        <div class="mb-3 row <?php echo $error_nombre; ?>">
            <label for="errorNombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="staticName" value="<?php echo $nombre; ?>" placeholder="Introduzca el nombre">
            </div>
        </div>
        <input type="hidden" name="paso" value="1" />
        <div class="mb-3 row <?php echo $error_email; ?>">
            <label for="errorEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" name="email" class="form-control" id="staticEmail" value="<?php echo $email; ?>" placeholder="Introduzca el email">
            </div>
        </div>
        <input type="hidden" name="paso" value="1" />
        <div class="mb-3 row <?php echo $error_edad; ?>">
            <label for="errorEdad" class="col-sm-2 col-form-label">Edad</label>
            <div class="col-sm-10">
            <input type="text" name="edad" class="form-control" id="staticEdad" value="<?php echo $edad; ?>" placeholder="Introduce tu edad">
            </div>
        </div>
        <input type="hidden" name="paso" value="1" />
        <div class="mb-3 row <?php echo $error_pais; ?>">
            <label for="staticPais" class="col-sm-2 col-form-label">Pais</label>
            <div class="col-sm-10">
            <input type="text" name="pais" class="form-control" id="staticPais" value="<?php echo $pais; ?>" placeholder="Introduce tu país">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>

        
    </form>
</div>
</body>
</html>