<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>

<body>
    <h1>Contacto:</h1>
    <form action="insert.php" method="post">
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="email">Correo:</label><br>
        <input type="email" id="email" name="email">

        <fieldset>
            <legend>Genero:</legend>

            <label><input type="radio" name="gender" value="M" /> Masculino</label>

            <label><input type="radio" name="gender" value="F" /> Femenino</label>

            <label><input type="radio" name="gender" value="NB" /> No binario</label>
        </fieldset>

        <label for="pass">Contraseña:</label><br>
        <input type="password" id="pass" name="pass">

        <br />
        <label for="city">Ciudad:</label>
        <br />
        <select name="cities" id="city">
            <option value="">--Elija una ciudad--</option>
            <option value="guadalajara">Gudalajara</option>
            <option value="zapopan">Zapopan</option>
            <option value="tonala">Tonala</option>
            <option value="otro">Otro</option>
        </select>


        <input type="checkbox" id="hire" name="hire" />
        <label for="hire">Me interesa contratarte</label>

        <br />
        <br />
        <input type="submit" value="Enviar">
    </form>

    <?php

    require('connection.php');

    echo "<h1>Prueba PHP</h1>";

    echo "<h2>Contactado por:</h2>";

    $sql = "SELECT * FROM Contacto";
    $smtm = $conn->prepare($sql);
    $smtm->execute();

    $smtm->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($smtm->fetchAll() as $row) {
        echo $row['Name'] . "-";
    }

    ?>
</body>

</html>