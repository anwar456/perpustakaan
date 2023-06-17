<?php

ob_start();
error_reporting(0);
$koneksi = new mysqli ("localhost","root","","perpustakaan");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Buat Akun</title>
<!-- BOOTSTRAP STYLES-->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- CUSTOM STYLES-->
<link href="assets/css/custom.css" rel="stylesheet" />
<!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<div class="container">
<div class="row text-center ">
<div class="col-md-12">
<br><br>
<h2><b>Halaman Buat Akun</b></h2>
<br>
</div>
</div>
<div class="row ">

<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
<div class="panel panel-default">
<div class="panel-heading">
<strong> Lengkapi Form Dibawah Ini !!! </strong>  
</div>
<div class="panel-body">
<form role="form" method="post">
    <br />
        <div class="form-group">
            <label>Masukan Username</label>
            <input type="text" name="username" class="form-control" placeholder="Your Username " />
        </div>

        <div class="form-group">
            <label>Masukan Password</label>
            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
        </div>

        <div class="form-group">
            <label>Masukan Nama Admin</label>
            <input type="text" name="nama" class="form-control"  placeholder="Admin Name" />
        </div>

        <div class="form-group">
            <label>Masukan Level</label>
            <select class="form-control" name="level">
                <option value="admin">admin</option>
            </select>
        </div>

        <div class="form-group">
            <label>Masukan Jabatan</label>
            <input type="text" name="jabatan" class="form-control"  placeholder="Your title" />
        </div>
        
        <input type="submit" name="simpan" value="Buat Akun" class="btn btn-primary">

    </form>
</div>

</div>
</div>


</div>
</div>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>

</body>
</html>

<?php

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$level = $_POST['level'];
$jabatan = $_POST['jabatan'];

$simpan = $_POST['simpan'];

if ($simpan){

$sql = $koneksi->query("insert into tb_user (username,password,nama,level,jabatan)
values('$username','$password','$nama','$level','$jabatan')");

if($sql){
?>
    <script type="text/javascript">
        alert("Akun Berhasil Dibuat");
        window.location.href="login.php";
    </script>
<?php
}
}

?>
