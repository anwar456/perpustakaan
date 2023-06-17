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
<p class="anggota">Buku</p>  
</div>

<a href="?page=buku&aksi=tambah" class="btn btn-success" style="margin-bottom: 5px;" ><i class="fa fa-plus"></i>
Tambah Data Buku</a>

<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-primary">
<div class="panel-heading">
Tabel Data Buku
</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>NO</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>ISBN</th>
            <th>Lokasi</th>
            <th>Jumlah Buku</th>
            <th>Aksi</th>
        </tr>
    </thead>
<tbody>

<?php

    $no = 1;
    $sql = $koneksi->query("select * from tb_buku");

    while ($data=$sql->fetch_assoc()){
        
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['judul']; ?></td>
    <td><?php echo $data['pengarang']; ?></td>
    <td><?php echo $data['penerbit']; ?></td>
    <td><?php echo $data['isbn']; ?></td>
    <td><?php echo $data['lokasi']; ?></td>
    <td><?php echo $data['jumlah_buku']; ?></td>
    <td>
        <a href="?page=buku&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info">
        <i class="fa fa-edit"> UBAH</i></a>
        <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" 
        href="?page=buku&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger">
        <i class="fa fa-trash"> HAPUS</i></a>
    </td>
</tr>

<?php }?>

</tbody>
</table>
</div>

<a href="./laporan/laporan_buku_exel.php" target="blank"
class="btn btn-default" style="margin-top: 8px;"><i class="fa fa-print"></i> ExportToExcel</a>

</div>
</div>
</div>