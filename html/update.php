<?php
include 'db_connection.php'; // Conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $simboloQuimico = $_POST['simboloQuimico'];
    $nombreLocalidad = $_POST['nombreLocalidad'];
    $comarca = $_POST['comarca'];
    $alturaNivelMar = $_POST['alturaNivelMar'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $numeroElementoQuimico = $_POST['numeroElementoQuimico'];

    $sql = "UPDATE tbpueblosmalaga
            SET NombreLocalidad='$nombreLocalidad', Comarca='$comarca', AlturaNivelMar='$alturaNivelMar',
                Habitantes='$habitantes', Superficie='$superficie'
            WHERE SimboloQuimico='$simboloQuimico'";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Registro actualizado exitosamente</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="menu">
        <a href="index.php">Inicio</a>
        <a href="create.php">Crear</a>
        <a href="read.php">Leer</a>
        <a href="update.php">Actualizar</a>
        <a href="delete.php">Borrar</a>
    </div>

    <div class="container">
        <h1>Actualizar Registro</h1>
        <p>Actualiza la información del pueblo o localidad seleccionada a través de este formulario.</p>

        <form method="post" action="">
            <table>
                <tr>
                    <td>SimboloQuimico:</td>
                    <td><input type="text" name="simboloQuimico"></td>
                </tr>
                <tr>
                    <td>NombreLocalidad:</td>
                    <td><input type="text" name="nombreLocalidad"></td>
                </tr>
                <tr>
                    <td>Comarca:</td>
                    <td><input type="text" name="comarca"></td>
                </tr>
                <tr>
                    <td>AlturaNivelMar:</td>
                    <td><input type="text" name="alturaNivelMar"></td>
                </tr>
                <tr>
                    <td>Habitantes:</td>
                    <td><input type="text" name="habitantes"></td>
                </tr>
                <tr>
                    <td>Superficie:</td>
                    <td><input type="text" name="superficie"></td>
                </tr>
                <tr>
                    <td>NumeroElementoQuimico:</td>
                    <td><input type="text" name="numeroElementoQuimico"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Actualizar"></td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>