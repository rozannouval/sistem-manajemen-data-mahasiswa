<?php
include "../php_logic/koneksi.php";

if (isset($_POST['simpan'])) {
    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES (
        '',
        '$_POST[nama]',
        '$_POST[nim]',
        '$_POST[jurusan]',
        '$_POST[email]',
        '$_POST[alamat]'
    )");

    echo "<script>alert('Data berhasil disimpan');location='data.php';</script>";
}

include "includes/header.php";
?>

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
