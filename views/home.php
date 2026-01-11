<?php
include '../php_logic/koneksi.php';

$css_khusus = 'home.css';

include 'includes/header.php';

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$jumlah_mahasiswa = mysqli_num_rows($query);
?>

    <div class="container">
        
        <div class="jumbotron">
            <h1>Selamat Datang!</h1>
            <h3>Di Sistem Manajemen Data Mahasiswa.</h3>
            <hr>
            <p>Anda login sebagai administrator. Silakan kelola data mahasiswa di bawah ini dengan mudah dan cepat.</p>
            <br>
            <a class="btn btn-primary" href="data.php">Lihat Data Mahasiswa</a>
            <a class="btn btn-success" href="form_tambah.php">Tambah Data Baru</a>
        </div>

        <div class="row">
            
            <div class="col-md-4">
                <div class="card card-blue">
                    <div class="card-header">
                        Total Mahasiswa
                    </div>
                    <div class="card-body">
                        <h2 class="card-title big-number">
                            <?php echo $jumlah_mahasiswa; ?>
                        </h2>
                        <p class="card-text">Mahasiswa terdaftar.</p>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Status Server</div>
                    <div class="card-body">
                        <h5 class="card-title text-online">
                            ● Online
                        </h5>
                        <p class="card-text">
                            <?php echo date('d F Y'); ?>
                        </p>
                    </div>
=======
        </div>

        <div class="col-md-4">
            <div class="card bg-light mb-3">
                <div class="card-header">Status Server</div>
                <div class="card-body">
                    <h5 class="card-title" style="color: green;">● Online</h5>
                    <p class="card-text"><?php echo date('d F Y'); ?></p>
>>>>>>> 787d6185577f148a17ef6d9a56868b88cfa8e486
                </div>
            </div>

        </div>
    </div>

<?php
// 4. Panggil Potongan Footer
include 'includes/footer.php';
?>