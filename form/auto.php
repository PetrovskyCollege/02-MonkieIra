<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="forma">
<form action="auto.php">

    <!-- <label for="email">E-mail</label> -->
    <div class="forms">
    <input type="email" name="e-mail" id="email" placeholder="E-mail">
    </div>
    <!-- <label for="pass">Пароль </label> -->
    <div class="forms">
    <input type="password" name="pass" id="pass" placeholder="Пароль">
    </div>

    <button type="submit" class="btn">Отправить</button>
</form>
</body>
</html>

<?php
if (isset($_GET["name"])) {
    echo "<h2>Привет, " . $_GET["name"] . "! </h2>";
}

if (isset($_POST["name"])) {
    echo "<h2>Привет, " . $_POST["name"] . "! </h2>";
}