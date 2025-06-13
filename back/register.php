<?php
$conn = new mysqli("localhost", "root", "1111", "DB");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$login = $_POST['login'];
$password = $_POST['password'];

// Уязвимый запрос (без защиты от SQL-инъекций)
$sql = "INSERT INTO users (login, password) VALUES ('$login', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Регистрация успешна! <a href='../index.html'>Войти</a>";
} else {
    echo "Ошибка: " . $conn->error;
}

$conn->close();
?>
