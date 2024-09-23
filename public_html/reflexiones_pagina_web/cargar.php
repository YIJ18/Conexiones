<!DOCTYPE html>
<html>

<head>
    <title>Archivo</title>
</head>

<body>
    <div class="informes ">
        <?php 

        include "config.php";
        $link = mysqli_connect($cfgServer['host'], $cfgServer['user'], $cfgServer['password'], $cfgServer['dbname']) or die('Could not connect: ' . mysqli_error($link));
        
    
        $query = "SELECT titulo, contenido, fecha, nombre, id FROM publicaciones_reflexiones";
        $resultado = mysqli_query($link, $query);
    // Verificar si hay resultados
    if (mysqli_num_rows($resultado) > 0) {
        // Obtener todos los resultados en un arreglo
        $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    
    // Iterar sobre el arreglo en orden inverso
    for ($i = count($filas) - 1; $i >= 0; $i--) {
        $fila = $filas[$i];
        ?>
        <section class="sombra">
            <div class="titulo">
                <?php echo $fila['titulo']; ?>
            </div>
            <div class="contenido">
                <?php echo $fila['contenido']; ?>
            </div>
            <hr>
            <section class="pie-publicacion">
                <div>
                    <?php echo $fila['nombre']; ?> 
                    <?php echo $fila['fecha']; ?>
                </div>
            </section>
        </section>
        <?php
    }
} else {
    echo "No se encontraron publicaciones.";
}

        ?>
    </div>
</body>

</html>