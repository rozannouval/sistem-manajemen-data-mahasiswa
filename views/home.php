<?php
include "includes/header.php";
?>

<main>
    <div class="container" style="margin-top: 50px;">
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang!</h1>
        <p class="lead">Di Sistem Manajemen Data Mahasiswa.</p>
        <hr class="my-4">
        <p>Anda login sebagai administrator. Anda dapat mengelola data mahasiswa mulai dari melihat, menambah, mengedit, hingga menghapus data.</p>
        
        <a class="btn btn-primary btn-lg" href="data.php" role="button">Lihat Data Mahasiswa</a>
        <a class="btn btn-success btn-lg" href="form_tambah.php" role="button">Tambah Data Baru</a>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Total Mahasiswa</div>
                <div class="card-body">
                    <h2 class="card-title"><?php echo $jumlah_mahasiswa; ?> Orang</h2>
                    <p class="card-text">Data tercatat di sistem.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-light mb-3">
                <div class="card-header">Status Server</div>
                <div class="card-body">
                    <h5 class="card-title" style="color: green;">● Online</h5>
                    <p class="card-text"><?php echo date('d F Y'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<?php
include "includes/footer.php";

?>