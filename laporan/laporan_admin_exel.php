<?php

    $koneksi = new mysqli("localhost","root","","perpustakaan");
    $filename = "admin_excel-(".date('d-m-y').").xlsx";

    header("content-disposition: attachment; filename='$filename'");
    header("content-type: application/vdn.ms-excel");

?>

<h2>Laporan Admin Perpustakaan</h2>

<table border="1">

    <tr>
        <th>NO</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama Admin</th>
        <th>Level</th>
        <th>Jabatan</th>
    </tr>

    <?php

        $no = 1;
        $sql = $koneksi->query("select * from tb_user");

        while ($data=$sql->fetch_assoc()){
        
    ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['level']; ?></td>
            <td><?php echo $data['jabatan']; ?></td>
        </tr>

    <?php }?>

</table>