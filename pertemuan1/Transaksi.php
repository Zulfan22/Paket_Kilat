<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Transaksi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/kategori.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav-links">
                <li><a href="Admin.php">Dashboard</a></li>
            </ul>
            <label class="switch">
                <input type="checkbox" id="toggle-kategori">
                <span class="slider round"></span>
            </label>
        </nav>
    </header>
    <main>
    <section class="transaksi" id="transaksi-section">
    <h2>Riwayat Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Nama Penerima</th>
                <th>Alamat Penerima</th>
                <th>Metode Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = '[{"ID_Pesanan":"1","Nama_Penerima":"Alek","Alamat_Penerima":"Jl.Golf","Metode_Pembayaran":"Cash On Delivery (COD)"},{"ID_Pesanan":"2","Nama_Penerima":"Alek","Alamat_Penerima":"Jl.Golf","Metode_Pembayaran":"Cash On Delivery (COD)"},{"ID_Pesanan":"3","Nama_Penerima":"alek","Alamat_Penerima":"Jl.Golf","Metode_Pembayaran":"E-Payment"},{"ID_Pesanan":"4","Nama_Penerima":"alek","Alamat_Penerima":"Jl.Golf","Metode_Pembayaran":"E-Payment"},{"ID_Pesanan":"5","Nama_Penerima":"alek","Alamat_Penerima":"Jl.Golf","Metode_Pembayaran":"E-Payment"}]';
            if($metode_pembayaran == 1){
                $metode_pembayaran = "Cash On Delivery (COD)";
            }else{
                $metode_pembayaran = "E-Payment";
            }
            $data_transaksi = json_decode($data, true);
            foreach($data_transaksi as $row) {
                echo "<tr>
                        <td>". $row["ID_Pesanan"]. "</td>
                        <td>". $row["Nama_Penerima"]. "</td>
                        <td>". $row["Alamat_Penerima"]. "</td>
                        <td>". $row["Metode_Pembayaran"]. "</td>
                        <td>
                            <a href='edit.php?id=d". $row["ID_Pesanan"]. "'>Edit</a>
                            <a href='delete.php?id=d". $row["ID_Pesanan"]. "'>Hapus</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</section>
    </main>
</body>
</html>