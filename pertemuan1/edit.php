<?php
include 'koneksi.php';
// Ambil ID Pesanan dari URL
$id_pesanan = $_GET['id_pesanan'];

// Query untuk mengambil data transaksi berdasarkan ID Pesanan
$sql = "SELECT * FROM tb_kategori WHERE ID_Pesanan = '$id_pesanan'";
$query = mysqli_query($conn, $sql);

// Cek apakah data ditemukan
if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_array($query);
} else {
    echo "Data tidak ditemukan";
    exit;
}

// Form untuk edit data transaksi
?>
<form action="edit.php" method="post">
    <input type="hidden" name="id_pesanan" value="<?php echo $id_pesanan;?>">
    <label>Nama Penerima:</label>
    <input type="text" name="nama_penerima" value="<?php echo $row['Nama_Penerima'];?>"><br><br>
    <label>Alamat Penerima:</label>
    <input type="text" name="alamat_penerima" value="<?php echo $row['Alamat_Penerima'];?>"><br><br>
    <label>Metode Pembayaran:</label>
    <input type="text" name="metode_pembayaran" value="<?php echo $row['Metode_Pembayaran'];?>"><br><br>
    <input type="submit" name="submit" value="Simpan Perubahan">
</form>

<?php
// Proses edit data transaksi
if (isset($_POST['submit'])) {
    $id_pesanan = $_POST['id_pesanan'];
    $nama_penerima = $_POST['nama_penerima'];
    $alamat_penerima = $_POST['alamat_penerima'];
    $metode_pembayaran = $_POST['metode_pembayaran'];

    $sql = "UPDATE tb_kategori SET Nama_Penerima = '$nama_penerima', Alamat_Penerima = '$alamat_penerima', Metode_Pembayaran = '$metode_pembayaran' WHERE ID_Pesanan = '$id_pesanan'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Data berhasil diupdate";
    } else {
        echo "Gagal mengupdate data: ". mysqli_error($conn);
    }
}

// Tutup koneksi
mysqli_close($conn);
?>