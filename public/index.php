<?php require 'cURLRequests.php';

if (isset($_POST["gehitu-erabiltzailea"])) {
    $array = array(
        "firstName" => $_POST["Izena"],
        "lastName" => $_POST["Abizena"],
        "email" => $_POST["Email"]
    );
    echo PostRequest($array, "http://java:6969/user");
}

?>

<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API probak</title>
</head>

<body>

    <?php $users = GetRequest("http://java:6969/user");
    foreach ($users as $user) {
        echo "<h1>id: " . $user->id . "</h1>";
        echo "<h2>izena: " . $user->firstName . "</h2>";
        echo "<h2>abizena: " . $user->lastName . "</h2>";
        echo "<h2>email: " . $user->email . "</h2>";
    }
    ?>

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
</body>

</html>