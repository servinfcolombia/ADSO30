<?php
// Conexión a la base de datos

function conectarBD() {
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "usuario_php";
    $conn = new mysqli($host, $dbuser, $dbpass, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    return $conn;
}

// Procesar eliminación si se envió
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['eliminar_id'])) {
    $conn = conectarBD();
    $id = intval($_POST['eliminar_id']);// convierte el ID a un entero para evitar inyecciones SQL
    $sql = "DELETE FROM login_user WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "<h3 style='color:red;'>Usuario eliminado correctamente.</h3>";
    } else {
        echo "<h3 style='color:red;'>Error al eliminar usuario: " . $conn->error . "</h3>";
    }
    $stmt->close();
}
$result = consultarBD();


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
<!-- Formulario de registro de usuarios -->
<H1>Clase de PHP del 4 de Junio del 2025</H1>
    <h2>Formulario de Registro</h2>
    <form action="registrar_leer_eliminar.php" method="post">
        <label for="user">Registre el Usuario</label><br>
        <input type="text" name="user" placeholder="Usuario"><br>
        <br>
        <label for="password">Registre la Contraseña</label><br>
        <input type="password" name="password" placeholder="Contraseña"><br>
        <br>
        <input type="submit" value="Ok">    
    </form>
<?php

$conn = conectarBD();
// Guardar en base de datos.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user']) && isset($_POST['password']) && !isset($_POST['eliminar_id'])) {
    $user = $_POST["user"];
    $password = $_POST["password"];
    // Prepara la consulta
    $sql = "INSERT INTO login_user (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Inserta los datos en la tabla login_user
    $stmt->bind_param("ss", $user, $password);
    if ($stmt->execute()) {
    echo "<h3 style='color:green;'>Usuario Insertado correctamente.</h3>";
    
    } else {
        echo "Error al registrar usuario: " . $conn->error;
    }
    $result = consultarBD();
    
}


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
            <th>Acciones</th>
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
                    <td>
                        <form method="post" style="display:inline;" onsubmit="return confirm('Eliminar Este usuario?');">
                            <input type="hidden" name="eliminar_id" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5" style="text-align:center;">No hay usuarios registrados</td></tr>
        <?php endif; ?>
    </tbody>
</table>
