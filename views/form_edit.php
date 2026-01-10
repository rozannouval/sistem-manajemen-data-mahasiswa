<?php
include "../php_logic/koneksi.php";

$data = mysqli_fetch_array(mysqli_query(
    $koneksi, "SELECT * FROM mahasiswa WHERE id='$_GET[id]'"
));

if (isset($_POST['update'])) {
    mysqli_query($koneksi, "UPDATE mahasiswa SET
        nama='$_POST[nama]',
        nim='$_POST[nim]',
        jurusan='$_POST[jurusan]',
        email='$_POST[email]',
        alamat='$_POST[alamat]'
        WHERE id='$_GET[id]'");

    echo "<script>alert('Data berhasil diupdate');location='data.php';</script>";
}

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
