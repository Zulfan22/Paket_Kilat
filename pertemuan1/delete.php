<?php
include "koneksi.php";
// Ambil ID Pesanan dari URL
$id_pesanan = $_GET['id_pesanan'];

// Query untuk menghapus data transaksi berdasarkan ID Pesanan
$sql = "DELETE FROM tb_kategori WHERE ID_Pesanan = '$id_pesanan'";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "Data berhasil dihapus";
} else {
    echo "Gagal menghapus data: ". mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>