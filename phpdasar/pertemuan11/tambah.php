<?php
require 'function.php';

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>

</body>

</html>