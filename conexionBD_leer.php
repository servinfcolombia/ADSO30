<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
<?php
function conectarBD() {
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "usuario_php";
    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);
    if ($conn->connect_error) {
        die("Error al conectar a la base de datos: " . $conn->connect_error);
    } else {
        echo "Conexión exitosa a la base de datos.";
    }
    return $conn;
}
//conectarBD();

//consultar base de datos
function consultarBD() {
    $conn = conectarBD();
    // Consulta para obtener los usuarios registrados
    $sql = "SELECT id, username AS username, password, created_at, updated_at FROM login_user";
    $result = $conn->query($sql);
    // Prepara la consulta
    $stmt = $conn->prepare($sql);
    // retorna el resultado de la consulta
    if (!$result) {
        die("Error en la consulta: " . $conn->error);
    }
    return $result;
}
$result = consultarBD();
?>

<!-- Tabla donde se presenta la consulta a la bae datos -->
<table border="1" cellpadding="5" cellspacing="0" style="margin-top:30px; width:100%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Creado</th>
            <th>Actualizado</th>
        </tr>
    </thead>
    <tbody>
            <!-- Verifica que la variable $result tenga un valor válido -->
            <!-- y que la consulta devolvió al menos una fila           -->
        <?php if ($result && $result->num_rows > 0): ?>
            <!-- Recorre todos los registros obtenidos                  -->    
            <!-- de la base de datos con la consulta SQL.               -->
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['username']); ?></td>
                    <td><?php echo htmlspecialchars($row['password']); ?></td>
                    <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                    <td><?php echo htmlspecialchars($row['updated_at']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5" style="text-align:center;">No hay usuarios registrados</td></tr>
        <?php endif; ?>
    </tbody>
</table>
</body>
</html>