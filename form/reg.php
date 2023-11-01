<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="form">
    <h2>Расскажите о себе</h2>
    <form action="reg.php" method="POST">
    
    <label for="name">Имя</label>
    <input type="text" name="name" id="name">
    <br>

    <label for="email">E-mail</label>
    <input type="email" name="e-mail" id="email">
    <br>

    <label for="hobbies">Увлечения*</label>
    <input type="text" name="hobbies" id="hobbies">
    <br>

    <label for="color">Любимый цвет*</label>
    <input type="color" name="color" id="color">
    <br>

    <label for="food">Любимая еда*</label>
    <input type="text" name="food" id="food">
    <br>

    <label for="pass">Пароль </label>
    <input type="password" name="pass" id="pass">

    <button type="submit">Отправить</button>
    </div>
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

