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


$seatNumber = $_POST['seatNumber'];
$reservationDate = $_POST['reservationDate'];
$reservationTime = $_POST['reservationTime'];

$sql = "INSERT INTO Bookings (seatNumber, reservationDate, reservationTime) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $seatNumber, $reservationDate, $reservationTime);

if ($stmt->execute()) {
    echo "Успешно";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>