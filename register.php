<?php
// Подключение к базе данных
$host = "localhost"; // или IP-адрес сервера базы данных
$dbname = "olzhas5b_bd";
$user = "olzhas5b_bd";
$password = "15042003Radmir";

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (isset($_POST['regist'])) {
    // Получение данных из формы
    $username = trim($_POST['login']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Очистка email-адреса
    $tel = $_POST['tel'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT); // Хеширование пароля
    $role = "admin"; // Значение роли пользователя по умолчанию


    // Проверка валидности email-адреса
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Неверный формат email-адреса.";
      exit;
    }

    // Проверка существования пользователя с таким же email
    $stmt = $conn->prepare("SELECT * FROM Users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
      echo "Пользователь с таким email уже зарегистрирован.";
      exit;
    }

    // Вставка данных в таблицу
    $stmt = $conn->prepare("INSERT INTO Users (login, password, email, tel, role) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$username, $password_hash, $email, $tel, $role]);

    // Перенаправление на страницу успеха
    header("Location: login-register.php");
    exit;
  }
} catch (PDOException $e) {
  echo "Ошибка подключения к базе данных: " . $e->getMessage();
}
?>