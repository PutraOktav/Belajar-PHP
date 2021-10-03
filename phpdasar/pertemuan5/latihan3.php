<?php
$mahasiswa = [
    ["Putra", "18.0504.0040", "Teknik Informatika", "Email"],
    ["Winly", "18.0504.0040", "Teknik Informatika", "Email"],
    ["Oktav", "18.0504.0040", "Teknik Informatika", "Email"]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>


    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NPM : <?= $mhs[1]; ?></li>
            <li>JURUSAN : <?= $mhs[2]; ?></li>
            <li>EMAIL : <?= $mhs[3]; ?></li>

        </ul>
    <?php endforeach; ?>

</body>

</html>