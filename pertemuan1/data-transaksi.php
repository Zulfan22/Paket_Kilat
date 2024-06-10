<?php
include 'koneksi.php';

// mengambil data dari tb_kategori
$sql = "SELECT * FROM tb_kategori";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: ". mysqli_error($conn));
}
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

mysqli_close($conn);
echo json_encode($data);
?>