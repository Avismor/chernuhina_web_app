<?php
$conn = new mysqli("localhost", "root", "1111", "DB");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$login = $_POST['login'];
$password = $_POST['password'];

// Уязвимый запрос (без защиты от SQL-инъекций)
$sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    //cookie с именем пользователя, срок 1 час
    setcookie("user", $login, time() + 3600, "/");
    header("Location: welcome.php");
    exit();
} else {
    echo "Ошибка авторизации! <a href='../index.html'>Попробовать снова</a>";
}

$conn->close();
?>
