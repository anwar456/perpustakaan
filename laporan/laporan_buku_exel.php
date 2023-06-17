<?php

    $koneksi = new mysqli("localhost","root","","perpustakaan");
    $filename = "buku_excel-(".date('d-m-y').").xlsx";

    header("content-disposition: attachment; filename='$filename'");
    header("content-type: application/vdn.ms-excel");

?>

<h2>Laporan Buku Perpustakaan</h2>

<table border="1">

    <tr>
        <th>NO</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>ISBN</th>
        <th>Lokasi</th>
        <th>Jumlah Buku</th>
    </tr>

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
    </tr>

    <?php }?>

</table>