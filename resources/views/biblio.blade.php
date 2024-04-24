<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <style>
        /* Estilos generales */
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.title{
    text-decoration: none;
    color: white;
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

/* Estilos del banner */
.banner {
    background-image: url('banner.jpg');
    background-size: cover;
    color: #fff;
    text-align: center;
    padding: 100px 0;
}

.banner h2 {
    margin: 0;
}

/* Estilos del catálogo */
.catalogo {
    padding: 50px 0;
}

.libro {
    margin-bottom: 20px;
}

.libro img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.libro h3 {
    margin-top: 0;
}

/* Estilos de los eventos */
.eventos {
    padding: 50px 0;
}

.evento {
    margin-bottom: 20px;
}

/* Estilos del formulario de contacto */
.contacto {
    background-color: #f4f4f4;
    padding: 50px 0;
}

.contacto form {
    display: flex;
    flex-wrap: wrap;
}

.contacto input[type="text"],
.contacto input[type="email"],
.contacto textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    box-sizing: border-box;
}

.contacto textarea {
    height: 100px;
}

.contacto button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

.contacto button:hover {
    background-color: #555;
}

/* Estilos del pie de página */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}
    </style>
</head>
<body>
    <header>
        <div class="container">
        <a class="title" href="{{route('welcome')}}"><h1>Biblioteca</h1></a>
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#catalogo">Catálogo</a></li>
                    <li><a href="#eventos">Eventos</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="inicio" class="banner">
        <div class="container">
            <h2>Bienvenido a la Biblioteca Municipal</h2>
            <p>Explora nuestro catálogo de libros y participa en nuestros eventos.</p>
            <a href="#catalogo" class="btn">Explorar catálogo</a>
        </div>
    </section>

    <section id="catalogo" class="catalogo">
        <div class="container">
            <h2>Catálogo de Libros</h2>
            <div class="libro">
                <img src="libro1.jpg" alt="Libro 1">
                <h3>Título del Libro</h3>
                <p>Autor del Libro</p>
                <p>Descripción del libro.</p>
            </div>
            <div class="libro">
                <img src="libro2.jpg" alt="Libro 2">
                <h3>Título del Libro</h3>
                <p>Autor del Libro</p>
                <p>Descripción del libro.</p>
            </div>
            <!-- Agregar más libros según sea necesario -->
        </div>
    </section>

    <section id="eventos" class="eventos">
        <div class="container">
            <h2>Próximos Eventos</h2>
            <div class="evento">
                <h3>Nombre del Evento</h3>
                <p>Descripción del evento.</p>
                <p>Fecha y hora del evento.</p>
            </div>
            <div class="evento">
                <h3>Nombre del Evento</h3>
                <p>Descripción del evento.</p>
                <p>Fecha y hora del evento.</p>
            </div>
            <!-- Agregar más eventos según sea necesario -->
        </div>
    </section>

    <section id="contacto" class="contacto">
        <div class="container">
            <h2>Contacto</h2>
            <p>Ponte en contacto con nosotros para más información.</p>
            <form action="#">
                <input type="text" placeholder="Nombre">
                <input type="email" placeholder="Correo Electrónico">
                <textarea placeholder="Mensaje"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>Derechos de Autor &copy; 2024 Biblioteca Municipal</p>
        </div>
    </footer>
</body>
</html>
