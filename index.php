<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="bonito.css">
</head>
<body>
    <div class="contenedor">
        <h5>Silvia Carrera</h5>
        <h5>Tarea 2.5: Página con varias ramas</h5>
        <h3>Bienvenido</h3>

        <form action="saludo.php" method="POST">
            <label>Idioma: </label>
            <select name="idioma" required>
                <option value="">Seleccione un idioma</option>
                <option value="Ingles">Inglés</option>
                <option value="japones">Japonés</option>
                <option value="frances">Francés</option>
                <option value="coreano">Coreano</option>
                <option value="tailandes">Tailandés</option>
            </select>
        </form>

        <a class="boton" href="saludo.php">
            Mostrar el saludo
        </a>
    </div>
</body>
</html>