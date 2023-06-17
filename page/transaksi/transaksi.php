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
<p class="anggota">Transaksi</p>  
</div>

<a href="?page=transaksi&aksi=tambah" class="btn btn-success" style="margin-bottom: 5px;" ><i class="fa fa-plus"></i>
Tambah Data Transaksi</a>

<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-primary">
<div class="panel-heading">
Tabel Data Transaksi
</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>NO</th>
        <th>Judul</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Terlambat</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>

<?php

$no = 1;
$sql = $koneksi->query("select * from tb_transaksi where status='pinjam'");

while ($data=$sql->fetch_assoc()){
    
?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $data['judul']; ?></td>
<td><?php echo $data['nis']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['tgl_pinjam']; ?></td>
<td><?php echo $data['tgl_kembali']; ?></td>
<td>
    <?php  

        $denda = 0;
        $tgl_dateline2 = $data['tgl_kembali'];
        $tgl_kembali = date('Y-m-d');

        $lambat = terlambat($tgl_dateline2, $tgl_kembali);
        $denda1 = $lambat*$denda;

        if($lambat > 0){
            echo "
            
                <font color='red'>$lambat hari</font>
            
            ";
        }else {
            echo $lambat ."Hari";
        }

    ?>
</td>
<td><?php echo $data['status']; ?></td>
<td>
    <a href="?page=transaksi&aksi=kembali&id=<?php echo $data['id']; ?>
    &judul=<?php echo $data['judul']; ?>" class="btn btn-info">KEMBALI</a>

    <a href="?page=transaksi&aksi=perpanjang&id=<?php echo $data['id']; ?>
    &judul=<?php echo $data['judul'] ?>&lambat=<?php echo $lambat ?>
    &tgl_kembali=<?php echo $data['tgl_kembali']?>" class="btn btn-danger">PERPANJANG</a>
</td>
</tr>

<?php }?>

</tbody>
</table>
</div>

<a href="./laporan/laporan_transaksi_exel.php" target="blank"
class="btn btn-default" style="margin-top: 8px;"><i class="fa fa-print"></i> ExportToExcel</a>

</div>
</div>
</div>