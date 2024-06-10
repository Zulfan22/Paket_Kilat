<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/default.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="proses-login.php" method="post">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required><br>
            <button type="submit">Log in</button>
            <label>Belum punya akun?<a href="registrasi.php"> Register</a></label><br>
        </form>
    </div>
    <script src="/JavaScript/form.js"></script>
</script>
</body>
</html>
