<div class="panel panel-primary">
<div class="panel-heading">
Tambah Data
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-6">
<form method="post">
    <div class="form-group">
        <label>Username</label>
        <input class="form-control" name="username" />
    </div>

    <div class="form-group">
        <label>Password</label>
        <input class="form-control" name="password" />
    </div>

    <div class="form-group">
        <label>Nama Admin</label>
        <input class="form-control" name="nama" />
    </div>

    <div class="form-group">
        <label>Masukan Level</label>
        <select class="form-control" name="level">
            <option value="admin">admin</option>
        </select>
    </div>

    <div class="form-group">
        <label>Jabatan</label>
        <input class="form-control" name="jabatan"/>
    </div>

    <div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
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

$sql = $koneksi->query("insert into tb_user (username,password,nama,level,jabatan)
values('$username','$password','$nama','$level','$jabatan')");

if($sql){
?>
<script type="text/javascript">
alert("Data Berhasil Disimpan");
window.location.href="?page=admin";
</script>
<?php
}
}

?>