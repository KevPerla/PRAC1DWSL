<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Practica 1</title>
</head>
<>
    <form action="ejemplo_practica1.php" method="post">

    <fieldset>
        <legend>Formulario de registro</legend>

        <div>
        <label>Nombre</label>
        <br>
        <input type="text" name="nombre" placeholder="ingresa tu nombre">
        </div>

        <div>
        <label>Apellido</label>
        <br>
        <input type="text" name="apellido" placeholder="ingresa tu apellido">
        </div>

        <div>
        <label>Edad</label>
        <br>
        <input type="number" name="edad" min="0" placeholder="ingresa tu edad">
        </div>
        <br>
        <div>
        <button type="submit">Enviar informacion</button>
        <a href="ejemplo_practica1.php">Refrescar</a>
        </div>
    </fieldset>
    </form>

    <?php
    if (isset($_POST["nombre"]))
    {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
    
        echo "
        <p> Hola <strong>{$nombre} {$apellido} </strong> sus datos fueron enviados correctamente por post </p>
        " ;
    }
    ?>

    <form action="ejemplo_practica1.php" method="get" name="agregar_mes">
    <fieldset>
        <legend>Agregar meses</legend>

        <div>
        <label>Nombre</label>
        <br>
        <input type="number" min="1" max="12" name="mes" placeholder="ingrese el mes">
        </div>
        <br>
        <div>
        <button type="submit">Enviar informacion</button>
        <a href="ejemplo_practica1.php">Refrescar</a>
        </div>
    </fieldset>
    </form>

    <?php
    $meses = [
        'Enero',
        'Febrero',
        'Marzo'
    ];

    if(isset($_GET["mes"])) {
        if(key_exists($_GET["mes"] - 1, $meses)){
            echo $meses[$_GET["mes"] - 1];
        } else {
            echo "Mes no existe o no fue agregado";
        }
    }
    ?>

</body>
</html>
