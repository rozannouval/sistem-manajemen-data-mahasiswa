<?php
$pageCss = 'data.css';
include '../php_logic/koneksi.php';
include 'includes/header.php';
?>

<div class="data-wrapper">
    <div class="header-data">
        <h2>Data Mahasiswa</h2>
        <a href="form_tambah.php" class="btn-tambah">+ Tambah Mahasiswa</a>
    </div>

    <table class="table-mhs">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY nim ASC");
            
            // Loop data
            while($row = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['jurusan']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="form_edit.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a>
                    
                    <a href="../php_logic/delete.php?id=<?php echo $row['id']; ?>" 
                       class="btn-hapus" 
                       onclick="return confirm('Yakin ingin menghapus data <?php echo $row['nama']; ?>?');">
                       Hapus
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>