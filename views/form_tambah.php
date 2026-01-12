<?php
include "../php_logic/create.php";
include "includes/header.php";
?>
<link rel="stylesheet" href="../css/tambah.css">

<h3>SMDM</h3>

<form method="post">
    Nama <br><input type="text" name="nama" required><br><br>
    NIM <br><input type="text" name="nim" required><br><br>
    Jurusan <br><input type="text" name="jurusan" required><br><br>
    Email <br><input type="email" name="email" required><br><br>
    Alamat <br><textarea name="alamat" required></textarea><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

<?php include "includes/footer.php"; ?>
