<?php
$server = "localhost";
$user = "romero";
$password = "pass";
$db = "formulario";

try {

    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}
?>