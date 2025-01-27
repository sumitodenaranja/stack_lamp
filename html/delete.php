<?php
include 'db_connection.php'; // Conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $simboloQuimico = $_POST['simboloQuimico'];

    $sql = "DELETE FROM tbpueblosmalaga WHERE SimboloQuimico='$simboloQuimico'";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Registro eliminado exitosamente</p>";
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
    <title>Eliminar Registro</title>
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
        <h1>Eliminar Registro</h1>
        <p>Ingresa el SimboloQuimico del pueblo que deseas eliminar de la base de datos.</p>

        <form method="post" action="">
            <table>
                <tr>
                    <td>SimboloQuimico:</td>
                    <td><input type="text" name="simboloQuimico"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Borrar"></td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>