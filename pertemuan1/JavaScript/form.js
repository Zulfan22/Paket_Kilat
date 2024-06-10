document.addEventListener('DOMContentLoaded', function() {
    console.log("DOM fully loaded and parsed");
    var loginForm = document.getElementById('loginForm');
    if (loginForm) {
        console.log("Login form found");
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault(); 
            alert('Berhasil login'); // menampilan pop up alert jika berhasil login
            window.location.href = 'Admin.html'; // mengarahkan ke laman admin
        });
    } else {
        console.log("Login form not found");
    }
});
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('kategori-form');
    const namaInput = document.getElementById('nama');
    const alamatInput = document.getElementById('alamat');
    const metodePembayaranSelect = document.getElementById('metode-pembayaran');

    // memuat data dan disimpan ke localstorage
    if (localStorage.getItem('nama')) {
        namaInput.value = localStorage.getItem('nama');
    }
    if (localStorage.getItem('alamat')) {
        alamatInput.value = localStorage.getItem('alamat');
    }
    if (localStorage.getItem('metodePembayaran')) {
        metodePembayaranSelect.value = localStorage.getItem('metodePembayaran');
    }

    form.addEventListener('submit', function(event) {
        event.preventDefault(); 

        //menyimpan data form kategori ke local storage
        localStorage.setItem('nama', namaInput.value);
        localStorage.setItem('alamat', alamatInput.value);
        localStorage.setItem('metodePembayaran', metodePembayaranSelect.value);

        //menampilkan pop up alert jika berhasil menyimpan ke localstorage
        alert('Data berhasil disimpan!');
    });
});
document.addEventListener("DOMContentLoaded", function() {

    document.getElementById("nama_penerima").value = "";

    document.getElementById("alamat_penerima").value = "";

    document.getElementById("metode_pembayaran").selectedIndex = -1;

});
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loginForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); 

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // mengatur autentifikasi
        const isAuthenticated = authenticate(username, password);

        if (isAuthenticated) {
            // mengatur cookies dengan username
            document.cookie = `username=${username}; expires=Sun, 1 Jan 2023 00:00:00 UTC; path=/`;

            // mengarahkan ke page yang dituju
            window.location.href = 'admin.php';
        } else {
            alert('Login gagal. Harap registrasi atau Cek Username atau password dengan benar.');
        }
    });

    function authenticate(username, password) {
        // mengatur autentifikasi (sesuai dengan username dan password)
        return (username === 'admin' && password === 'password');
    }
});
