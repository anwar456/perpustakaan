<?php

    $koneksi = new mysqli("localhost","root","","perpustakaan");
    $filename = "anggota_excel-(".date('d-m-y').").xlsx";

    header("content-disposition: attachment; filename='$filename'");
    header("content-type: application/vdn.ms-excel");

?>

<h2>Laporan Anggota Perpustakaan</h2>

<table border="1">

    <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
    </tr>

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
    </tr>

    <?php }?>

</table>