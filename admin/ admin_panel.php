<?php
session_start();

// Проверка наличия сессии пользователя
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    // Если сессия отсутствует или роль пользователя не администратор, перенаправляем на страницу входа
    header('Location: login.php');
    exit;
}

// Дальнейший код страницы админ панели
// Здесь можно разместить содержимое админ панели
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Ваши стили и скрипты -->
</head>
<body>
    <h1>Welcome to Admin Panel</h1>
    <!-- Здесь ваш контент админ панели -->
</body>
</html>