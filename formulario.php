<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!-- Cliente - Formulario HTML -->
    <form action="formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
    
    <?php
    // Procesamiento del formulario PHP - Servidor
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $apellido;
    }
    ?>
</body>
</html>