<?php
session_start();

include 'blocks/auth.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION["username"] = $username;
        header("Location: adminsha.php");
        exit();
    } else {
        $errorMessage = "Неверные данные для входа";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>введите логин</title>
    <meta name="keywords" content="vernyi-drug.kz , верный друг, помощь животным, help , Караганда">
    <meta name="description" content="Караганда, 'Верный Друг' - это сообщество неравнодушных волонтеров нашего города.Мы предлагаем помощь животным и ищем верных друзей.">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link  rel= "icon"  href= "img/favicon.ico"  type= "image/x-icon" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <script src="main.js?v=<?php echo strval(time()); ?>" defer ></script>
 </head>
<body>
<div style='text-align: center; margin-top: 100px;'>
<h2 style="color: green;">Введите логин и пароль</h2>
<form method="post">
    <?= isset($errorMessage) ? "<p>$errorMessage</p>" : "" ?>
    <input class="screen_form" style='text-align: center; margin-top: 10px;' type="text" name="username" placeholder="Имя пользователя" required><br>
    <input class="screen_form" style='text-align: center; margin-top: 10px;' type="password" name="password" placeholder="Пароль" required><br>
    <button class="screen_form" style='text-align: center; margin-top: 10px;' type="submit">Войти</button>
</form>
</body>
</div>

 
   
