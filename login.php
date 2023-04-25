<?php
// подключаемся к базе данных
$db = mysqli_connect('localhost', 'root', '', 'CinemaMonster');

// проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // получаем данные из формы
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // ищем пользователя в базе данных
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db, $query);

  if (mysqli_num_rows($result) == 1) {
    // пользователь найден, авторизуем его
    session_start();
    $_SESSION['username'] = $username;
    header('Location: PC.php');
    exit();
  } else {
    // пользователь не найден, выводим сообщение об ошибке
    $error = "Неправильный логин или пароль";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Авторизация</title>
</head>
<body>
  <h1>Авторизация</h1>

  <?php if (isset($error)) { echo $error; } ?>

  <form method="post" action="login.php">
    <label for="username">Логин:</label>
    <input type="text" id="username" name="username">

    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password">

    <button type="submit">Войти</button>
  </form>

  </body>
</html>