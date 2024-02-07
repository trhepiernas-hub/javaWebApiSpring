<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API probak</title>
</head>

<body>
    <h1>API-aren erantzuna</h1>

    <?php require 'cURLRequests.php';

    if (isset($_POST["gehitu-erabiltzailea"])) {
        $array = array(
            "firstName" => $_POST["Izena"],
            "lastName" => $_POST["Abizena"],
            "email" => $_POST["Email"]
        );
        echo PostRequest($array, "http://java:6969/user");
    }

    if (isset($_POST["modifikatu-erabiltzailea"])) {
        $array = array(
            "firstName" => $_POST["Izena"],
            "lastName" => $_POST["Abizena"],
            "email" => $_POST["Email"]
        );
        echo PutRequest($array, "http://java:6969/user/" . $_POST["Id"]);

    }

    if (isset($_POST["borratu-erabiltzailea"])) {
        echo DeleteRequest("http://java:6969/user/" . $_POST["Id"]);

    }

    ?>

    <h1>Erabiltzaile berri bat sortu post petizioarekin</h1>
    <form action="index.php" method="post">
        <label for="Izena">Izena</label>
        <input type="text" name="Izena" id="Izena">
        <br>
        <label for="Abizena">Abizena</label>
        <input type="text" name="Abizena" id="Abizena">
        <br>
        <label for="Email">Email</label>
        <input type="text" name="Email" id="Email">
        <br>
        <input type="submit" name="gehitu-erabiltzailea" value="Bidali">
    </form>
    <br>

    <h1>Erabiltzaile baten datuak aldatu put petizioarekin</h1>
    <form action="index.php" method="post">
        <label for="Id">id</label>
        <input type="text" name="Id" id="Id">
        <br>
        <label for="Izena">Izena</label>
        <input type="text" name="Izena" id="Izena">
        <br>
        <label for="Abizena">Abizena</label>
        <input type="text" name="Abizena" id="Abizena">
        <br>
        <label for="Email">Email</label>
        <input type="text" name="Email" id="Email">
        <br>
        <input type="submit" name="modifikatu-erabiltzailea" value="Bidali">
    </form>

    <h1>Erabiltzaile bat ezabatu DELETE metodoarekin</h1>
    <form action="index.php" method="post">
        <label for="Id">id</label>
        <input type="text" name="Id" id="Id">
        <br>
        <input type="submit" name="borratu-erabiltzailea" value="Bidali">
    </form>

    <?php
    // Erabiltzaile guztiak lortu get petizioarekin
    $users = GetRequest("http://java:6969/user");
    foreach ($users as $user) {
        echo "<h1>id: " . $user->id . "</h1>";
        echo "<h2>izena: " . $user->firstName . "</h2>";
        echo "<h2>abizena: " . $user->lastName . "</h2>";
        echo "<h2>email: " . $user->email . "</h2>";
    }
    ?>

</body>

</html>