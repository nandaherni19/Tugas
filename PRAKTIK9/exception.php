<?php
session_start();
$username_valid = "nanda";
$password_valid = "2024";
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: exception_.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (empty($_POST["username"]) || empty($_POST["password"])) {
            throw new Exception("Username dan password tidak boleh kosong.");
        }

        $user = $_POST["username"];
        $pass = $_POST["password"];

        if ($user === $username_valid && $pass === $password_valid) {
            $_SESSION["login"] = true;
            $_SESSION["user"] = $user;
        } else {
            throw new Exception("Username atau password salah.");
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login dengan Exception Handling</title>
</head>
<body>
    <?php if (!isset($_SESSION["login"])): ?>
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="post">
            <label>Username:</label><br>
            <input type="text" name="username" required><br><br>
            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    <?php else: ?>
        <h2>Selamat datang, <?php echo $_SESSION["user"]; ?>!</h2>
        <p>Anda berhasil login.</p>
        <a href="?logout=true">Logout</a>
    <?php endif; ?>
</body>
</html>
