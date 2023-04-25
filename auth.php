<?php
              // Подключение к базе данных
              $mysqli = mysqli_connect('localhost', 'username', 'password', 'users');
              
              // Обработка отправки формы
              if ($_SERVER['REQUEST_METHOD'] === 'POST') 
              {
                  // Получение данных из формы
                  $username = $_POST['username'];
                  $password = $_POST['password'];
              
                  // Поиск пользователя в базе данных
                  $result = mysqli_query($mysqli, "SELECT * FROM cinemamonster_user WHERE user_name = '$username'");
                  $result = mysqli_query($mysqli, "SELECT * FROM cinemamonster_user WHERE password = '$password'");
                  $result = mysqli_query($mysqli, "SELECT * FROM cinemamonster_user WHERE password = '$Email'");
                  if (mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_assoc($result);
                      // Проверка правильности пароля
                      if (password_verify($password, $row['password'])) 
                      { echo "Авторизация успешна"; 
                      }
                          else { echo "Неправильное имя пользователя или пароль"; } } 
                          else { echo "Неправильное имя пользователя или пароль"; } }
                  mysqli_close($mysqli);
?>