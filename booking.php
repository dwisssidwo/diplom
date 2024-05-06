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

// Обработка данных бронирования
$user_id = $_POST['user_id'];
$room_id = $_POST['room_id'];
$check_in_date = $_POST['check_in_date'];
$check_out_date = $_POST['check_out_date'];

// SQL запрос для вставки данных бронирования в таблицу
$sql = "INSERT INTO bookings (user_id, room_id, check_in_date, check_out_date)
        VALUES ('$user_id', '$room_id', '$check_in_date', '$check_out_date')";

if ($conn->query($sql) === TRUE) {
    echo "Бронирование успешно добавлено";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
