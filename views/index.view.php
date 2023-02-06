<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación con POST</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre de la persona" required>
        <br><br>

        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad" placeholder="Edad de la persona" required>
        <br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder="Email de la persona" required>
        <br><br>

        <input type="submit" value="Enviar" name="Enviar">
    </form>
</body>
</html>