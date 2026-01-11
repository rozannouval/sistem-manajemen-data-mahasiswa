<?php
include '../php_logic/koneksi.php';

$css_khusus = 'data.css?v=2'; 

include 'includes/header.php';
?>

    <div class="container main-content">
        
        <div class="header-section">
            <h1>Data Mahasiswa</h1>
            <p>Kelola data mahasiswa yang terdaftar di sistem.</p>
        </div>

        <div class="action-bar">
            <a href="form_tambah.php" class="btn btn-tambah">+ Tambah Mahasiswa</a>
        </div>

        <div class="card-tabel">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $ambildata = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id DESC");
                    
                    if(mysqli_num_rows($ambildata) > 0){
                        while($data = mysqli_fetch_array($ambildata)){
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nim']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['jurusan']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn-aksi btn-edit">Edit</a>
                                <a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn-aksi btn-hapus" onclick="return confirm('Yakin hapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php 
                        }
                    } else {
                        echo "<tr><td colspan='6' class='data-kosong'>Belum ada data mahasiswa.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
include 'includes/footer.php';
?>