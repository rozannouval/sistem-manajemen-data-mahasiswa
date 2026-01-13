<?php
$pageCss = 'home.css';

include '../php_logic/koneksi.php';

$query_count = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM mahasiswa");
$data_count = mysqli_fetch_assoc($query_count);
$total_mhs = $data_count['total'];

include 'includes/header.php';
?>

<div class="home-wrapper" style="min-height: 85vh;">
    <h1>Selamat Datang di Sistem Manajemen Data Mahasiswa</h1>
    <p class="subtitle">Kelola data akademik dengan mudah dan cepat......</p>

    <div class="cards-container">
        <div class="card bg-blue">
            <h3>Total Mahasiswa</h3>
            <div class="number"><?php echo $total_mhs; ?></div>
            <p>Mahasiswa terdaftar</p>
        </div>

        <div class="card bg-green">
            <h3>Input Data Baru</h3>
            <p>Tambahkan data mahasiswa baru ke sistem.</p>
            <a href="form_tambah.php" class="btn-card">Tambah Data</a>
        </div>

        <div class="card bg-orange">
            <h3>Status Sistem</h3>
            <p>Sistem berjalan dengan baik.</p>
            <span class="status-active">Aktif</span>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>