<?php
session_start();

// Подключение к базе данных
$host = "localhost"; // или IP-адрес сервера базы данных
$dbname = "olzhas5b_bd";
$user = "olzhas5b_bd";
$password = "15042003Radmir";
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$error_message = ''; // Инициализация переменной для сообщений об ошибках

// Обработка POST-запроса
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $login = trim(mysqli_real_escape_string($conn, $_POST['login']));
  $password = trim(mysqli_real_escape_string($conn, $_POST['password']));

  // Проверка корректности логина
  if (empty($login)) {
    $error_message = "<p class='error'>Введите имя пользователя</p>";
  }

  // Проверка корректности пароля
  elseif (empty($password)) {
    $error_message = "<p class='error'>Введите пароль</p>";
  }

  else {
    // Поиск пользователя в базе данных
    $stmt = mysqli_prepare($conn, "SELECT * FROM Users WHERE login=?");
    mysqli_stmt_bind_param($stmt, "s", $login);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
      $user = mysqli_fetch_assoc($result);

      // Проверка пароля
      if (password_verify($password, $user['password'])) {
        // Авторизация пользователя
        $_SESSION['user_id'] = $user['CustomerID'];
        $_SESSION['user_role'] = $user['role'];

        // Проверка, отмечен ли чекбокс "запомнить меня"
        if (isset($_POST['remember_me'])) {
          // Если отмечен, установить куки с именем пользователя
          setcookie('remembered_user', $login, time() + (86400 * 30), "/"); // куки действительны 30 дней
        } else {
          // Если не отмечен, удалить куки, если они есть
          if (isset($_COOKIE['remembered_user'])) {
            setcookie('remembered_user', '', time() - 3600, "/"); // удаляем куки
          }
        }

        // Перенаправление пользователя
        if ($user['role'] === 'admin') {
          header('Location: admin_panel.php');
          exit;
        } else {
          header('Location: updown.php');
          exit;
        }
      } else {
        $error_message = "<p class='error'>Неверный пароль</p>";
      }
    } else {
      $error_message = "<p class='error'>Пользователь с таким логином не найден</p>";
    }

    mysqli_stmt_close($stmt);
  }
}

mysqli_close($conn);
?>
