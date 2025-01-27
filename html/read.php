<?php
include 'db_connection.php'; // Conexión a la base de datos

$sql = "SELECT * FROM tbpueblosmalaga";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer Registros</title>
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
        <h1>Lista de Pueblos Málaga</h1>
        <p>A continuación se muestran todos los registros de pueblos en Málaga almacenados en la base de datos.</p>

        <?php
        include 'db_connection.php'; // Conexión a la base de datos

        $sql = "SELECT * FROM tbpueblosmalaga";
        $result = $conn->query($sql);

        if ($result->num_rows > 0):
        ?>
            <table>
                <tr>
                    <th>SimboloQuimico</th>
                    <th>NombreLocalidad</th>
                    <th>Comarca</th>
                    <th>AlturaNivelMar</th>
                    <th>Habitantes</th>
                    <th>Superficie</th>
                    <th>NumeroElementoQuimico</th>
                </tr>

                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['SimboloQuimico']; ?></td>
                        <td><?php echo $row['NombreLocalidad']; ?></td>
                        <td><?php echo $row['Comarca']; ?></td>
                        <td><?php echo $row['AlturaNivelMar']; ?></td>
                        <td><?php echo $row['Habitantes']; ?></td>
                        <td><?php echo $row['Superficie']; ?></td>
                        <td><?php echo $row['NumeroElementoQuimico']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p>No se encontraron resultados</p>
        <?php endif; ?>

    </div>

</body>
</html>