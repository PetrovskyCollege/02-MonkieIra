<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="form">
        
        <h2>Новый дневник</h2>
        <form action="reg.php" method="POST">
    
        <div class="forms">
        <!-- <label for="name">Имя</label> -->
        <input type="text" name="name" id="name" placeholder="Имя">
        </div>
    
        <div class="forms">
        <!-- <label for="email">E-mail</label> -->
        <input type="email" name="e-mail" id="email" placeholder="E-mail">
        </div>
    
        <div class="forms">
        <!-- <label for="hobbies">Увлечения*</label> -->
        <input type="text" name="hobbies" id="hobbies" placeholder="Увлечения">
        </div>
    
        <div class="forms">
        <!-- <label for="color">Любимый цвет*</label> -->
        <input type="text" name="color" id="color" placeholder="Любимый цвет">
        </div>
    
        <div class="forms">
        <!-- <label for="food">Любимая еда*</label> -->
        <input type="text" name="food" id="food" placeholder="Любимая еда">
        </div>
    
        <div class="forms">
        <!-- <label for="pass">Пароль </label> -->
        <input type="password" name="pass" id="pass" placeholder="Пароль">
        </div>
    
        <button type="submit" class="btn">Создать дневник</button>
        </div>
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

