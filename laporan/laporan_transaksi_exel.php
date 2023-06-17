<?php

    $koneksi = new mysqli("localhost","root","","perpustakaan");
    $filename = "transaksi_excel-(".date('d-m-y').").xlsx";

    header("content-disposition: attachment; filename='$filename'");
    header("content-type: application/vdn.ms-excel");

?>

<h2>Laporan Transaksi Perpustakaan</h2>

<table border="1">

    <tr>
        <th>NO</th>
        <th>Judul</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status</th>
    </tr>

    <?php

        $no = 1;
        $sql = $koneksi->query("select * from tb_transaksi");

        while ($data=$sql->fetch_assoc()){
        
    ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $data['nis']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['tgl_pinjam']; ?></td>
        <td><?php echo $data['tgl_kembali']; ?></td>
        <td><?php echo $data['status']; ?></td>
    </tr>

    <?php }?>

</table>