<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Mahasiswa</title>
    
    <link rel="stylesheet" type="text/css" href="../css/headfoot.css">

    <?php if (isset($css_khusus)) { ?>
        <link rel="stylesheet" type="text/css" href="../css/<?php echo $css_khusus; ?>">
    <?php } ?>
</head>
<body>

    <nav class="navbar">
        <div class="container nav-wrapper">
            <a href="home.php" class="logo">Sistem Admin</a>
            
            <?php 
            $halaman_sekarang = basename($_SERVER['PHP_SELF']);
            
            if ($halaman_sekarang == 'home.php') { 
            ?>
                <a href="../login.php" class="btn-back" style="color:red; border-color:red;">Logout</a>
            <?php } else { ?>
                <a href="home.php" class="btn-back">← Kembali ke Dashboard</a>
            <?php } ?>
        </div>
    </nav>