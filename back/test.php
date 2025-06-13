<?php  

  // Уязвимый код
  $conn = new mysqli("localhost", "root", "1111", "DB");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $login = htmlspecialchars($_POST['login']);
  $password  = htmlspecialchars($_POST['password']);

  // Опасный запрос (уязвим к SQL-инъекции)
  $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      echo "Успешный вход!";
  } else {
      echo "Ошибка авторизации!";
  }
  $conn->close();

?>
