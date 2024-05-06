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

// Обработка POST-запроса для бронирования
$computer_ID = $_POST['computer_ID'];
$start_Date = $_POST['start_Date'];
$end_Date = $_POST['end_Date'];

// Подготовка SQL-запроса для вставки данных
$sql = "INSERT INTO Bookings (computer_ID, start_Date, end_Date) 
        VALUES ('$computer_ID', '$start_Date', '$end_Date')";

if (mysqli_query($conn, $sql)) {
    echo "Бронирование успешно добавлено";
} else {
    echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
