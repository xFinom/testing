<?php
require('connection.php');

if (!empty($_POST['name']) && !empty($_POST['email'])) {
    $nombre = $_POST['name'];
    $correo = $_POST['email'];

    $query = "INSERT INTO Contacto (Name, Email) VALUES ('$nombre', '$correo')";

    $conn->exec($query);

    header('Location: formulario.php');
} else {
    echo "Faltan datos";
}
?>