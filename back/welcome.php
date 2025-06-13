<?php
if (!isset($_COOKIE['user'])) {
    header("Location: ../index.html");
    exit();
}
$user = htmlspecialchars($_COOKIE['user']);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <title>Приветствие</title>
  <link rel="stylesheet" href="../styles/styles.css" />
</head>
<body>
  <div class="auth-container">
    <h2>Привет, <?php echo $user; ?>!</h2>
    <a href="logout.php">Выйти</a>
  </div>
</body>
</html>
