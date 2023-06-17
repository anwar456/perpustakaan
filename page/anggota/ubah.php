<?php

$nis = $_GET['nis'];

$sql = $koneksi->query("select * from tb_anggota where nis='$nis'");

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
        <label>NIS</label>
        <input class="form-control" name="nis" value="<?php echo $tampil['nis']; ?>"/>
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>"/>
    </div>

    <div class="form-group">
        <label>Tempat Lahir</label>
        <input class="form-control" name="tempat_lahir" 
        value="<?php echo $tampil['tempat_lahir']; ?>"/>
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input class="form-control" name="tgl_lahir" type="date" 
        value="<?php echo $tampil['tgl_lahir']; ?>"/>
    </div>
    
    <div class="form-group">
        <label>Jenis Kelamin</label><br>
        <label class="checkbox-inline">
            <input type="checkbox" value="l" name="jk" <?php  ?> /> Laki-laki
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" value="p" name="jk"/> Perempuan
        </label>
    </div>

    <div class="form-group">
        <label>Kelas</label>
        <select class="form-control" name="kelas">
            <option value="7a" <?php if($tampil['kelas']=='7a'){echo "selected";} ?>>7a</option>
            <option value="7b" <?php if($tampil['kelas']=='7b'){echo "selected";} ?>>7b</option>
            <option value="7c" <?php if($tampil['kelas']=='7c'){echo "selected";} ?>>7c</option>
            <option value="7d" <?php if($tampil['kelas']=='7d'){echo "selected";} ?>>7d</option>
            <option value="7e" <?php if($tampil['kelas']=='7e'){echo "selected";} ?>>7e</option>
            <option value="8a" <?php if($tampil['kelas']=='8a'){echo "selected";} ?>>8a</option>
            <option value="8b" <?php if($tampil['kelas']=='8b'){echo "selected";} ?>>8b</option>
            <option value="8c" <?php if($tampil['kelas']=='8c'){echo "selected";} ?>>8c</option>
            <option value="8d" <?php if($tampil['kelas']=='8d'){echo "selected";} ?>>8d</option>
            <option value="8e" <?php if($tampil['kelas']=='8e'){echo "selected";} ?>>8e</option>
            <option value="9a" <?php if($tampil['kelas']=='9a'){echo "selected";} ?>>9a</option>
            <option value="9b" <?php if($tampil['kelas']=='9b'){echo "selected";} ?>>9b</option>
            <option value="9c" <?php if($tampil['kelas']=='9c'){echo "selected";} ?>>9c</option>
            <option value="9d" <?php if($tampil['kelas']=='9d'){echo "selected";} ?>>9d</option>
            <option value="9e" <?php if($tampil['kelas']=='9e'){echo "selected";} ?>>9e</option>
        </select>
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

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$kelas = $_POST['kelas'];

$simpan = $_POST['simpan'];

if ($simpan){

$sql = $koneksi->query("update tb_anggota set nis='$nis',nama='$nama',tempat_lahir='$tempat_lahir',
tgl_lahir='$tgl_lahir',jk='$jk',kelas='$kelas' where nis='$nis' ");

if($sql){
?>
<script type="text/javascript">
alert("Data Berhasil Diubah");
window.location.href="?page=anggota";
</script>
<?php
}
}

?>