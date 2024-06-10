<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password!== $confirm_password) {
        echo "Password dan konfirmasi password tidak cocok.";
        exit();
    }

    $sql = "INSERT INTO tb_admin (nama_depan, nama_belakang, email, username, password) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Prepare failed: '. $conn->error);
    }

    $stmt->bind_param("sssss", $nama_depan, $nama_belakang, $email, $username, $password);

    if ($stmt->execute()) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: ". $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>