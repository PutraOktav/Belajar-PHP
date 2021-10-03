<!DOCTYPE html>
<html lang="en">

<head>
    <title>POST</title>
</head>
<?php if (isset($_POST["submit"])) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<body>
    <form action="" method="POST">
        Masukkan Nama :
        <input type="text" name="nama" id="">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>

</html>