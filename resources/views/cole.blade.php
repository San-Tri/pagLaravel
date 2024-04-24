<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio</title>
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

/* Estilos del área Nosotros */
.nosotros {
    padding: 50px 0;
    text-align: center;
}

/* Estilos de los cursos */
.cursos {
    background-color: #f4f4f4;
    padding: 50px 0;
}

.curso {
    margin-bottom: 20px;
}

.curso h3 {
    margin-top: 0;
}

/* Estilos del formulario de contacto */
.contacto {
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
        <a class="title" href="{{route('welcome')}}"><h1>Colegio San Juan</h1></a>
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#cursos">Cursos</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="inicio" class="banner">
        <div class="container">
            <h2>Bienvenido al Colegio San Juan</h2>
            <p>Brindamos educación de calidad para un futuro brillante.</p>
            <a href="#nosotros" class="btn">Saber más</a>
        </div>
    </section>

    <section id="nosotros" class="nosotros">
        <div class="container">
            <h2>Nosotros</h2>
            <p>Descripción del colegio y su misión.</p>
        </div>
    </section>

    <section id="cursos" class="cursos">
        <div class="container">
            <h2>Cursos</h2>
            <div class="curso">
                <h3>Nombre del Curso</h3>
                <p>Descripción del curso y requisitos.</p>
            </div>
            <div class="curso">
                <h3>Nombre del Curso</h3>
                <p>Descripción del curso y requisitos.</p>
            </div>
            <!-- Agregar más cursos según sea necesario -->
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
            <p>Derechos de Autor &copy; 2024 Colegio San Juan</p>
        </div>
    </footer>
</body>
</html>
