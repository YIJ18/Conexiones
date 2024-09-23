<!DOCTYPE html>
<html>
<head>
    <title>archivo</title>
</head>
<body>
    
    <?php
    include "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];
        
        if (empty($nombre) || empty($correo) || empty($titulo) || empty($contenido)) {
            die("Por favor, completa todos los campos.");
        }
        
        // Conectar a la base de datos
        $link = mysqli_connect($cfgServer['host'], $cfgServer['user'], $cfgServer['password'], $cfgServer['dbname']) or die('Could not connect: ' . mysqli_error($link));
        $query = "INSERT INTO publicaciones_reflexiones (nombre, correo, titulo, contenido, fecha) VALUES (?, ?, ?, ?, NOW())";
        $stmt = mysqli_prepare($link, $query);
        
        // Vincular parámetros y ejecutar la consulta
        mysqli_stmt_bind_param($stmt, "ssss", $nombre, $correo, $titulo, $contenido);
        $result = mysqli_stmt_execute($stmt);
        
        // Verificar si la consulta fue exitosa
        if ($result) {
            echo "contenido enviado correctamente.";
        } else {
            echo "Error al enviar el contenido: " . mysqli_error($link);
        }
        
        // Cerrar la conexión y liberar recursos
        mysqli_stmt_close($stmt);
        mysqli_close($link);
    }


        header("Location: blog_reflexion.php");
    exit();
    ?>

</body>
</html>