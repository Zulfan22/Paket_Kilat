<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_penerima = $_POST['nama_penerima'];
    $alamat_penerima = $_POST['alamat_penerima'];
    $metode_pembayaran = $_POST['metode_pembayaran']; // Ambil nilai dari combobox

    if (empty($nama_penerima) || empty($alamat_penerima)) {
        $message = 'Nama dan Alamat harap diisi';
        $location = 'entry-kategori.php'; 
    } else {
        $sql = "INSERT INTO tb_kategori (nama_penerima, alamat_penerima, `metode_pembayaran`) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Prepare failed: ". $conn->error);
        }
        $stmt->bind_param("sss", $nama_penerima, $alamat_penerima, $metode_pembayaran);

        if (!$stmt->execute()) {
            $message = 'Terjadi Kesalahan: ' . $stmt->error;
            $location = 'entry-kategori.php'; 
        } else {
            $message = 'Data Berhasil Ditambahkan!';
            $location = 'kategori.php';
        }
    }

    $stmt->close();
    $conn->close();

    header("Location: $location");
    exit();
}

if (isset($message)) {
    echo "<script>alert('$message');</script>";
}
?>