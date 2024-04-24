<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
        /* Estilos generales */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Estilos del encabezado */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        /* Estilos de la sección de descripción */
        .descripcion {
            background-image: url(https://markmedia.cl/wp-content/uploads/2022/02/fondo-servicios.jpg);
            background-size: cover;
            background-position: center;
            padding: 50px 0;
            text-align: center;
            height: calc(100vh - 130px); /* 130px es la altura aproximada del encabezado y el pie de página */
        }

        .servicios-container {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow-x: auto; /* Habilita el desplazamiento horizontal si los servicios no caben en la pantalla */
            flex-wrap: nowrap; /* Evita que los elementos flexibles se envuelvan a la siguiente línea */
        }

        .servicio {
            width: 350px; /* Ancho fijo para cada servicio */
            height: 220px; /* Altura fija para cada servicio */
            margin: 10px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra */
            overflow: hidden; /* Oculta cualquier contenido que se extienda más allá del tamaño del contenedor */
            transition: transform 0.3s ease; /* Agrega transición al hover */
        }

        .servicio:hover {
            transform: translateY(-5px); /* Efecto de levantamiento al pasar el mouse */
        }

        .servicio img {
            width: 100%;
            height: 150px; /* Cambia esta altura según tus necesidades */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            object-fit: cover;
        }


        .servicio-content {
            padding: 20px;
        }

        .servicio h3 {
            margin-top: 10px;
            font-size: 20px; /* Tamaño del título */
        }

        .servicio a {
            display: block;
        }

        .servicio p {
            margin-top: 10px;
            color: #666;
        }

        /* Estilos del pie de página */
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        /* Estilos para el título de la descripción */
        .descripcion h2 {
            font-size: 32px; /* Tamaño del título */
            color: #fff; /* Color del texto */
            margin-bottom: 20px; /* Espaciado inferior */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra de texto */
        }

        /* Estilos para la introducción */
        .intro {
            font-size: 18px;
            color: #fff;
            margin-top: 20px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); /* Añade sombra */
        }

    </style>
</head>
<body>
<header>
    <div class="container">
        <h1>Portal de Servicios</h1>
        <nav>
            <ul>
                <li><a href="{{route('barber')}}">barberia</a></li>
                <li><a href="{{route('biblio')}}">Biblioteca</a></li>
                <li><a href="{{route('cole')}}">Cursos</a></li>
                <li><a href="{{route('flor')}}">Florería</a></li>
                <li><a href="{{route('restaurant')}}">Restaurante</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="descripcion">
    <div class="container">
        <h2>Bienvenido al Portal de Servicios</h2>
        <p class="intro">Explora nuestra variedad de servicios y descubre lo que tenemos para ofrecerte.</p>
        <div class="servicios-container">
            <div class="servicio">
                <a href="{{route('barber')}}">
                    <img src="https://vivirbienesunplacer.com/wp-content/uploads/barberia-2.jpg" alt="Servicio 1">
                </a>
                <div class="servicio-content">
                    <h3>Barberia</h3>
                </div>
            </div>
            <div class="servicio">
                <a href="{{route('biblio')}}">
                    <img src="https://files.meiobit.com/wp-content/uploads/2013/08/2013081320130813biblioteca.jpg" alt="Servicio 2">
                </a>
                <div class="servicio-content">
                    <h3>Biblioteca</h3>
                </div>
            </div>
            <div class="servicio">
                <a href="{{route('cole')}}">
                    <img src="https://th.bing.com/th/id/R.8060a31bf2dea7ebc5146f584c4bcd1e?rik=2NnaU8fgJjQhNg&pid=ImgRaw&r=0" alt="Servicio 3">
                </a>
                <div class="servicio-content">
                    <h3>Cursos</h3>
                </div>
            </div>
            <div class="servicio">
                <a href="{{route('flor')}}">
                    <img src="https://p0.pikist.com/photos/148/189/beautiful-blooming-bright-color-delicate-field-flora-flower-garden-thumbnail.jpg" alt="Servicio 4">
                </a>
                <div class="servicio-content">
                    <h3>Floreria</h3>
                </div>
            </div>
            <div class="servicio">
                <a href="{{route('restaurant')}}">
                    <img src="https://e0.pxfuel.com/wallpapers/313/383/desktop-wallpaper-interior-miscellanea-miscellaneous-table-sofa-coziness-comfort-cafe-cafe-devices-thumbnail.jpg" alt="Servicio 5">
                </a>
                <div class="servicio-content">
                    <h3>Restaurante</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <p>Derechos de Autor &copy; 2024 Portal de Servicios</p>
    </div>
</footer>
</body>
</html>
