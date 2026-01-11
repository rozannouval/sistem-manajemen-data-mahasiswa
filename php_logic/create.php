<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
  mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES (
        NULL,
        '$_POST[nama]',
        '$_POST[nim]',
        '$_POST[jurusan]',
        '$_POST[email]',
        '$_POST[alamat]',
        NOW()
    )");

  echo "<script>alert('Data berhasil disimpan');location='data.php';</script>";
}