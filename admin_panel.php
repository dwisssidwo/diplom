<?php
session_start();

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администратор</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <style>
        /* Добавляем игровой стиль */
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #ff0;
            text-align: center;
        }
        #navbar {
            float: left;
            margin-right: 20px;
        }
        #navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        #navbar ul li {
            margin-bottom: 10px;
        }
        #navbar ul li a.button {
            display: block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        #navbar ul li a.button:hover {
            background-color: #555;
        }
        #main-content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Добро Пожаловать Админ</h1>
    <div id="navbar">
        <ul>
            <li class="active"><a href="updown.php" class="button">Сайт</a></li>
            <li><a href="user.php" class="button">Аккаунты</a></li>
            <li><a href="bron.php" class="button">Бронирование</a></li>
            <li><a href="comment.php" class="button">Комментарии</a></li>
            <li><a href="holodelnik.php" class="button">Холодильник</a></li>
        </ul>
    </div>

    <div id="main-content">
        <!-- Здесь будет основное содержимое вашего сайта -->
        
    </div>
</body>
</html>


