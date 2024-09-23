<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflexiones Universitarias</title>

    <!-- estilos CSS o scripts JS -->
    <link rel="preload" href="estilos/normalize.css" as="style">
    <link rel="stylesheet" href="estilos/normalize.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="estilos/estilo.css" as="style">
    <link href="estilos/estilo.css" rel="stylesheet">

</head>

<body>
    <header>
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="blog_reflexion.php">Inicio</a>
            <a href="nosotros.php">Nosotros</a>
        </nav>
    </div>


    <section class="ibero">
        <div class="contenedor-ibero">
            <h2 class="titulo">Blog de reflexiones universitarias</h2>
            <div class="iconos">
                <p>
                    <a href="https://www.instagram.com/eeycp_especialidad_ibero/" target="_blank"
                        rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M16.5 7.5l0 .01" />
                        </svg>
                    </a>
                </p>
                <p>
                    <a href="https://www.instagram.com/eeycp_especialidad_ibero/" target="_blank"
                        rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                            width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg>
                    </a>
                </p>


                <p>
                    <a href="https://www.instagram.com/eeycp_especialidad_ibero/" target="_blank"
                        rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-x" width="44"
                            height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                        </svg>
                    </a>
                </p>
            </div>
        </div>
    </section>


    <main class="contenedor sombra">
        <h2>Contenido</h2>
        <div>
            <?php
                include 'cargar.php';  // Incluye el archivo header.php
            ?>
        </div>

        <section>
            <h2>Nueva Publicación</h2>
            <form class="formulario" method="POST" action="archivo.php">
                <fieldset>
                    <legend>
                        <p>Publica llenando todos los campos</p>
                    </legend>

                    <div class="contenedor-campos">
                        <div class="campo">
                            <label>Nombre</label>
                            <input class="input-text" type="text" placeholder="Tu nombre" name="nombre">
                        </div>

                        <div class="campo">
                            <label>Correo</label>
                            <input class="input-text" type="email" placeholder="Tu email" name="correo">
                        </div>

                        <div class="campo">
                            <label>Titulo</label>
                            <input class="input-text" type="text" placeholder="El titulo de la publicación"
                                name="titulo">
                        </div>

                        <div class="campo">
                            <label>Contenido</label>
                            <textarea class="input-text" name="contenido"></textarea>

                        </div>
                    </div>

                    <div class="alinear-derecha flex">
                        <input class="boton w-100" type="submit" value="Publicar" name="entrar">
                    </div>



                </fieldset>
            </form>
        </section>
    </main>
    <footer class="footer">
        <p>La página creada por Iris Jasso</p>
    </footer>

</body>

</html>