<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="auto.php" method="POST">
    <label for="email">E-mail</label>
    <input type="email" name="e-mail" id="email">
    <br>
    <label for="pass">Пароль </label>
    <input type="password" name="pass" id="pass">

    <button type="submit">Отпрвить</button>
</form>
</body>
</html>

<?php
if (isset($_GET["name"])) {
    echo "<h2>Привет, GET " . $_GET["name"] . "! </h2>";
}

if (isset($_POST["name"])) {
    echo "<h2>Привет POST, " . $_POST["name"] . "! </h2>";
}
