<style type="text/css">
.anggota{
font-family: sans-serif;
font-size: 40px;
color: red;
padding-bottom: 30px;
padding-top: 30px;
text-align: center;
font-weight: bold;
}
</style>

<div class="panel panel-default">
<p class="anggota">Anggota</p>  
</div>

<a href="?page=anggota&aksi=tambah" class="btn btn-success" style="margin-bottom: 5px;" ><i class="fa fa-plus"></i>
Tambah Data Anggota</a>

<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-primary">
<div class="panel-heading">
Tabel Data Anggota
</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
<tbody>

<?php

    $no = 1;
    $sql = $koneksi->query("select * from tb_anggota");

    while ($data=$sql->fetch_assoc()){
        
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['nis']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['tempat_lahir']; ?></td>
    <td><?php echo $data['tgl_lahir']; ?></td>
    <td><?php echo $data['jk']; ?></td>
    <td><?php echo $data['kelas']; ?></td>
    <td>
        <a href="?page=anggota&aksi=ubah&nis=<?php echo $data['nis']; ?>" class="btn btn-info">
        <i class="fa fa-edit"> UBAH</i></a>
        <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" 
        href="?page=anggota&aksi=hapus&nis=<?php echo $data['nis']; ?>" class="btn btn-danger">
        <i class="fa fa-trash"> HAPUS</i></a>
    </td>
</tr>

<?php }?>

</tbody>
</table>
</div>

<a href="./laporan/laporan_anggota_exel.php" target="blank"
class="btn btn-default" style="margin-top: 8px;"><i class="fa fa-print"></i> ExportToExcel</a>

</div>
</div>
</div>
