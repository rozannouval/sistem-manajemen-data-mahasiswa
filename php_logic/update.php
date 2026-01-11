<?php
include "koneksi.php";

$data = mysqli_fetch_array(mysqli_query(
  $koneksi,
  "SELECT * FROM mahasiswa WHERE id='$_GET[id]'"
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