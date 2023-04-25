<?php 
require_once('sql.php');


// Обработка отправки формы
if (($_SERVER['REQUEST_METHOD'] === 'POST') &&(isset($_POST['username'])&&(isset($_POST['password']))))
{

    // Получение данных из формы
    $username = $_POST['username'];
    $password = $_POST['password'];

    //$sql = "SELECT * FROM `users1`;";
    // Поиск пользователя в базе данных
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    
    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        // Проверка правильности пароля
        if (password_verify($password.PASSWD_SALT, $row['password'])) 
        {
            echo "Авторизация успешна";
            echo "&nbsp;&nbsp;&nbsp;<a href=\"index2.php\">Перейти на главную страницу</a>";
        } 
        else { echo "Неправильное имя пользователя или пароль"; } }
        else { echo "Неправильное имя пользователя или пароль"; }
  }
?>
<html>
    <body>
    <div class="panel-body">
            <form role="form" action="auth.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control input-lg" name="username" placeholder="login">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg" name="password" placeholder="password">
              </div>
              <button type="submit" class="btn btn-warning pull-right">Log In</button>
              </form>
            </div>
          </div>        
    </body>
</html>
