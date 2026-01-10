<?php
include "../php_logic/update.php";
include "includes/header.php";
?>

<h3>SMDM</h3>

<form method="post">
    Nama <br><input type="text" name="nama" value="<?= $data['nama']; ?>"><br><br>
    NIM <br><input type="text" name="nim" value="<?= $data['nim']; ?>"><br><br>
    Jurusan <br><input type="text" name="jurusan" value="<?= $data['jurusan']; ?>"><br><br>
    Email <br><input type="email" name="email" value="<?= $data['email']; ?>"><br><br>
    Alamat <br><textarea name="alamat"><?= $data['alamat']; ?></textarea><br><br>

    <button type="submit" name="update">Update</button>
</form>

<?php include "includes/footer.php"; ?>
