<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form method="post" action="registration.php">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Зарегистрироваться">
    </form>

    <?php
// Подключение к базе данных
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "CinemaMonster"; // Имя вашей базы данных
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Обработка данных формы регистрации
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Вставка данных в базу данных
    $query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sss", $username, $password, $email);
    $result = mysqli_stmt_execute($stmt);

    if ($result) { echo "Регистрация прошла успешно!"; }
    else { echo "Ошибка регистрации: " . mysqli_error($conn); }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
</body>
</html>