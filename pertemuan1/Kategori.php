<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/kategori.css">
</head>
<body>
    <header>
        <ul class="nav-links">
            <li><a href="Admin.php">Dashboard</a></li>
        </ul>
    </header>
    <main>
        <section id="Dashboard">
            <h1> Selamat Datang</h1>
        </section>
        <section class="kategori">
            <h2>Kategori</h2>
            <form action="entry-kategori.php" method="POST" >
                <label for="nama_penerima">Nama:</label>
                <input type="text" name="nama_penerima" id="nama_penerima" required><br>
                <label for="alamat_penerima">Alamat:</label>
                <input type="text" name="alamat_penerima" id="alamat_penerima" required><br>
                <label for="metode_pembayaran">Metode Pembayaran:</label>
                <select id="metode_pembayaran" name="metode_pembayaran">
                    <option value="COD">COD</option>
                    <option value="E-Payment">E-Payment</option>
                </select>
                <button type="submit">Simpan</button>
            </form>
        </section>
    </main>
    <script src="JavaScript/form.js"></script>
</body>
</html>