<?php
include "koneksi.php";

$id = mysqli_real_escape_string($koneksi, $_GET['id']);

$query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");

if ($query) {
    echo "<script>alert('Data berhasil dihapus');location='../views/data.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data');location='../views/data.php';</script>";
}
?>