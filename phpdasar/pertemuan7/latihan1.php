<?php
// $_GET
$mahasiswa = [[
    "nama" => "Putra",
    "npm" => "18",
    "email" => "Email1",
    "jurusan" => "Teknik Informatika",
    "gambar" => "putra.jpg"
], [
    "nama" => "Oktav",
    "npm" => "18",
    "email" => "Email2",
    "jurusan" => "Teknik Informatika",
    "gambar" => "oktav.png"
]];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=
            <?= $mhs["npm"]; ?>&email=
            <?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=
            <?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>