<!Doctype html>
<html>
    <head><title>Aplikasi Kantor</title></head>
<body>
    <h2>Aplikasi Perkantoran PT Moro Seneng</h2>
    <b>Pilihan Menu :</b>
    <ol>
        <li><a href="{{ url('kendaraan') }}">Kelola Data Kendaraan</a></li>
        <li><a href="{{ url('pegawai') }}">Kelola Data Pegawai</a></li>
        <li><a href="{{ url('pinjam') }}">Kelola Transaksi Pinjam</a></li>
    </ol>
    <a href="{{ url('logout') }}">Logout</a>
</body>
</html>