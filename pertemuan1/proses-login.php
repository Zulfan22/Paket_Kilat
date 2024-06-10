<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_admin WHERE username =? AND password =?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        header("Location: admin.php");
        exit();
    } else {
        header("Location: Login.php");
        echo "<script>alert('Pastikan Username Terdaftar atau password salah');</script>";
        
    }

    $stmt->close();
    $conn->close();
}
?>