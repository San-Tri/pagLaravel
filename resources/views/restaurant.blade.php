<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
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

/* Estilos del menú */
.menu {
    padding: 50px 0;
}

.plato {
    margin-bottom: 20px;
}

.plato img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.plato h3 {
    margin-top: 0;
}

/* Estilos de las reservas */
.reservas {
    background-color: #f4f4f4;
    padding: 50px 0;
}

.reservas form {
    display: flex;
    flex-wrap: wrap;
}

.reservas input,
.reservas textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    box-sizing: border-box;
}

.reservas button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

.reservas button:hover {
    background-color: #555;
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
        <a class="title" href="{{route('welcome')}}"><h1>Restaurante Del Chef</h1></a>
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#menu">Menú</a></li>
                    <li><a href="#reservas">Reservas</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="inicio" class="banner">
        <div class="container">
            <h2>Bienvenido al Restaurante del Chef</h2>
            <p>Descubre nuestra exquisita selección de platos y ambiente acogedor.</p>
            <a href="#menu" class="btn">Ver menú</a>
        </div>
    </section>

    <section id="menu" class="menu">
        <div class="container">
            <h2>Menú</h2>
            <div class="plato">
                <img src="plato1.jpg" alt="Plato 1">
                <h3>Nombre del Plato</h3>
                <p>Descripción del plato.</p>
                <p>Precio: $XX</p>
            </div>
            <div class="plato">
                <img src="plato2.jpg" alt="Plato 2">
                <h3>Nombre del Plato</h3>
                <p>Descripción del plato.</p>
                <p>Precio: $XX</p>
            </div>
            <!-- Agregar más platos según sea necesario -->
        </div>
    </section>

    <section id="reservas" class="reservas">
        <div class="container">
            <h2>Reservas</h2>
            <p>Realiza tu reserva ahora mismo y disfruta de una experiencia culinaria única.</p>
            <form action="#">
                <input type="text" placeholder="Nombre">
                <input type="email" placeholder="Correo Electrónico">
                <input type="date" placeholder="Fecha">
                <input type="time" placeholder="Hora">
                <input type="number" placeholder="Número de Personas">
                <button type="submit">Reservar</button>
            </form>
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
            <p>Derechos de Autor &copy; 2024 Restaurante del Chef</p>
        </div>
    </footer>
</body>
</html>
