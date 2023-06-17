<div class="panel panel-primary">
<div class="panel-heading">
Tambah Data
</div>
<div class="panel-body">
<div class="row">
<div class="col-md-6">
<form method="post">
    <div class="form-group">
        <label>NIS</label>
        <input class="form-control" name="nis" />
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input class="form-control" name="nama" />
    </div>

    <div class="form-group">
        <label>Tempat Lahir</label>
        <input class="form-control" name="tempat_lahir" />
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input class="form-control" name="tgl_lahir" type="date"/>
    </div>
    
    <div class="form-group">
        <label>Jenis Kelamin</label><br>
        <label class="checkbox-inline">
            <input type="checkbox" value="l" name="jk"/> Laki-laki
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" value="p" name="jk"/> Perempuan
        </label>
    </div>

    <div class="form-group">
        <label>Kelas</label>
        <select class="form-control" name="kelas">
            <option value="7a">7a</option>
            <option value="7b">7b</option>
            <option value="7c">7c</option>
            <option value="7d">7d</option>
            <option value="7e">7e</option>
            <option value="8a">8a</option>
            <option value="8b">8b</option>
            <option value="8c">8c</option>
            <option value="8d">8d</option>
            <option value="8e">8e</option>
            <option value="9a">9a</option>
            <option value="9b">9b</option>
            <option value="9c">9c</option>
            <option value="9d">9d</option>
            <option value="9e">9e</option>
        </select>
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

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$kelas = $_POST['kelas'];

$simpan = $_POST['simpan'];

if ($simpan){

$sql = $koneksi->query("insert into tb_anggota (nis,nama,tempat_lahir,tgl_lahir,
jk,kelas)values('$nis','$nama','$tempat_lahir','$tgl_lahir','$jk','$kelas')");

if($sql){
?>
<script type="text/javascript">
alert("Data Berhasil Disimpan");
window.location.href="?page=anggota";
</script>
<?php
}
}

?>