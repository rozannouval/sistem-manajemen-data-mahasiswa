<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMDM - Sistem Manajemen Data Mahasiswa</title>
    
    <link rel="stylesheet" href="../css/headfoot.css">
    
    <?php if(isset($pageCss)) { ?>
        <link rel="stylesheet" href="../css/<?php echo $pageCss; ?>">
    <?php } ?>
</head>
<body>

    <nav>
        <div class="logo">SMDM</div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="data.php">Data Mahasiswa</a></li>
            <li><a href="form_tambah.php">Tambah Data</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>
    
    <div class="content-container">