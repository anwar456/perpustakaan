<?php

$id = $_GET['id'];

$sql = $koneksi->query("select * from tb_user where id='$id'");

$tampil = $sql->fetch_assoc();

?>

<div class="panel panel-primary">
<div class="panel-heading">
Ubah Data
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-6">
<form method="post">
    <div class="form-group">
        <label>Username</label>
        <input class="form-control" name="username" value="<?php echo $tampil['username']; ?>" />
    </div>

    <div class="form-group">
        <label>Password</label>
        <input class="form-control" name="password" value="<?php echo $tampil['password']; ?>" />
    </div>

    <div class="form-group">
        <label>Nama Admin</label>
        <input class="form-control" name="nama"  value="<?php echo $tampil['nama']; ?>"/>
    </div>

    <div class="form-group">
        <label>Level</label>
        <input class="form-control" name="level" value="<?php echo $tampil['level']; ?>" readonly/>
    </div>

    <div class="form-group">
        <label>Jabatan</label>
        <input class="form-control" name="jabatan" value="<?php echo $tampil['jabatan']; ?>"/>
    </div>

    <div>
        <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
    </div>

</div>
</form>
</div>
</div>
</div>
</div>
</div>

<?php

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$level = $_POST['level'];
$jabatan = $_POST['jabatan'];

$simpan = $_POST['simpan'];

if ($simpan){

$sql = $koneksi->query("update tb_user set username='$username', password='$password', 
nama='$nama', level='$level', jabatan='$jabatan' where id='$id'");

if($sql){
?>
<script type="text/javascript">
alert("Data Berhasil Diubah");
window.location.href="?page=admin";
</script>
<?php
}
}

?>
