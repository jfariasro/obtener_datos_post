<?php

if (isset($_POST['Enviar'])) {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];

    echo "
        Nombre de la persona: $nombre <br>
        Edad de la persona: $edad <br>
        Email de la persona: $email <br><br>
    ";
}

require 'views/index.view.php';
