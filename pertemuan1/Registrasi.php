<!DOCTYPE HTML>
<html>
<head>
    <title>Registrasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/default.css">
</head> 
<body>
    <div class="registration-container">
        <h1>Registrasi</h1>
        <form action="proses-registrasi.php" method="post">
            <label>Nama Depan</label><br>
            <input type="text" name="nama_depan" required><br>
            <label>Nama Belakang</label><br>
            <input type="text" name="nama_belakang" required><br>
            <label>Email</label><br>
            <input type="text" name="email" required><br>
            <label>Username</label><br>
            <input type="text" name="username" required><br>
            <label>Password</label><br>
            <input type="password" name="password" required><br>
            <label>Konfirmasi Password</label><br>
            <input type="password" name="confirm_password" required><br>
            <button type="submit">Register</button>
        </form>
    </div>
    <script>document.getElementById("registerForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var nama_depan = document.getElementById("nama_depan").value;
    var nama_belakang = document.getElementById("nama_belakang").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "proses-registrasi.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    };
    xhr.send("nama_depan=" + nama_depan + "&nama_belakang=" + nama_belakang + "&username=" + username + "&password=" + password);
});
</script>
</body>
</html>
