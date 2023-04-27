<?php 

require_once('sql.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="bootstrap/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php

    // обработка отправки формы
    if (isset($_POST['submit'])) {
        // получение данных из формы регистрации
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'].PASSWD_SALT, PASSWORD_DEFAULT); // хеширование пароля

        // выполнение запроса на добавление нового пользователя в базу данных
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password');";

        if (mysqli_query($conn, $sql)){
            echo "Новый пользователь успешно добавлен в базу данных";
            echo "<a href=\"auth.php\">Перейти на страницу авторизации</a>";
            // перенаправление на страницу авторизации
            //header("Location: auth.php");
            exit();
        } else {
            echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // закрытие соединения с базой данных
    mysqli_close($conn);
  ?>

  <!-- HTML-код формы регистрации -->
  <form method="post" action="">
      <label for="username">Имя пользователя:</label>
      <input type="text" name="username" required><br>

      <label for="email">E-mail:</label>
      <input type="email" name="email" required><br>

      <label for="password">Пароль:</label>
      <input type="password" name="password" required><br>

      <label for="password">Подтвердите пароль</label>
      <input type="password" name="confirm_password" required><br>

      <input type="submit" name="submit" value="Зарегистрироваться">
  </form>


  <footer>
    <div class="container">
      <p class="text-center"><a href="/">About author</a></p>
    </div>
  </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/assets/js/bootstrap.min.js"></script>
  </body>
</html>