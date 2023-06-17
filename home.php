 <!-- /. NAV SIDE  -->
 <?php

    $sql = $koneksi->query("select * from tb_anggota");
    $anggota = $sql->num_rows;

    $sql2 = $koneksi->query("select * from tb_buku");
    $buku = $sql2->num_rows;

    $sql3 = $koneksi->query("select * from tb_user");
    $admin = $sql3->num_rows;

    $sql4 = $koneksi->query("select * from tb_transaksi");
    $transaksi = $sql4->num_rows;

?>
 
 
 <style type="text/css"> 
   .berjalan{
        font-family: sans-serif;
        font-size: 18px;
        color: grey;
   }
   .admin{
        font-family: sans-serif;
        font-size: 40px;
        color: red;
        padding-bottom: 30px;
        padding-top: 30px;
        text-align: center;
        font-weight: bold;
   }
 </style>
 
 <marquee behavior="" direction="">
     <p class="berjalan">Selamat Datang Dihalaman Utama Aplikasi Sistem Informasi Perpustakaan Berbasi WEB</p>
 </marquee>
<div id="page-inner">
   
    <div class="panel panel-default">
        <p class="admin">Dashboard</p>  
    </div>              
        <!-- /. ROW  -->
        <hr />
    <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-6">           
<div class="panel panel-back noti-box">
    <span class="icon-box bg-color-red set-icon">
        <i class="fa fa-users"></i>
    </span>
    <div class="text-box" >
        <p class="main-text"><?php echo $anggota; ?></p>
        <p class="text-muted">Anggota</p>
    </div>
    </div>
    </div>
        <div class="col-md-3 col-sm-6 col-xs-6">           
<div class="panel panel-back noti-box">
    <span class="icon-box bg-color-green set-icon">
        <i class="fa fa-book"></i>
    </span>
    <div class="text-box" >
        <p class="main-text"><?php echo $buku; ?></p>
        <p class="text-muted">Buku</p>
    </div>
    </div>
    </div>
        <div class="col-md-3 col-sm-6 col-xs-6">           
<div class="panel panel-back noti-box">
    <span class="icon-box bg-color-blue set-icon">
        <i class="fa fa-user"></i>
    </span>
    <div class="text-box" >
        <p class="main-text"><?php echo $admin; ?></p>
        <p class="text-muted">Admin</p>
    </div>
    </div>
    </div>
        <div class="col-md-3 col-sm-6 col-xs-6">           
<div class="panel panel-back noti-box">
    <span class="icon-box bg-color-brown set-icon">
        <i class="fa fa-edit"></i>
    </span>
    <div class="text-box" >
        <p class="main-text"><?php echo $transaksi; ?></p>
        <p class="text-muted">Transaksi</p>
    </div>
    </div>
    </div>
</div>