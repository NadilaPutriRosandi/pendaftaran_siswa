<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <a href="form-input.php" style="padding:0.4% 0.8%;background-color:#9370DB;color:#fff;border-radius:2px;text-decoration:none;">Tambah Data</a><br><br>
    <table border="1" cellspacing="2" width="80%">
        <tr style="text-align:center;font-weight:bold;background-color:#eee;">
            <td>NO</td>
            <td>NISN</td>
            <td>Nama Siswa</td>
            <td>Jurusan</td>
            <td>Alamat</td>
            <td>Email</td>
            <td>Opsi</td>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1; 
        $select = mysqli_query($conn ,"SELECT * FROM siswa");
        if(mysqli_num_rows($select) > 0){
        while($hasil = mysqli_fetch_array($select)){
        ?>
        <tr style="text-align:center;">
            <td><?php echo $no++ ?></td>
            <td><?php echo $hasil['nisn'] ?></td>
            <td><?php echo $hasil['nama_siswa'] ?></td>
            <td><?php echo $hasil['jurusan'] ?></td>
            <td><?php echo $hasil['alamat'] ?></td>
            <td><?php echo $hasil['email'] ?></td>

            <td>
                <a href="form-edit.php?nisn=<?php echo $hasil['nisn'] ?>">Edit</a> ||
                <a href="delete.php?nisn=<?php echo $hasil['nisn'] ?>">Hapus</a>
            </td>
        </tr>
        <?php }}else{ ?>
        <tr>
            <td colspan="7" align="center">Data Kosong</td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>