<?php
// $mahasiswa = [
//     ["Putra", "18", "Email", "Teknik Informatika"],
//     ["Winly", "18", "Email", "Teknik Informatika"],
//     ["Oktav", "18", "Email", "Teknik Informatika"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>NPM : <?php echo $mhs["npm"]; ?></li>
            <li>Email : <?php echo $mhs["jurusan"]; ?></li>
            <li>Jurusan : <?php echo $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>




</body>

</html>