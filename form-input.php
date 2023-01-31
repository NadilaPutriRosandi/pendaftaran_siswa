<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <h2>Input Data Siswa</h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:#9370DB;color:#fff;border-radius:2px;text-decoration:none;">Data Siswa</a><br><br>

    <form action="" method="POST">
         <table>
           <tr>
             <td>NISN</td>
             <td>:</td>
             <td><input type="text" name="nisn" placeholder="NISN" required></td>
           </tr>
           <tr>
             <td>Nama Siswa</td>
             <td>:</td>
             <td><input type="text" name="nama_siswa" placeholder="Nama Siswa" required></td>
           </tr>
           <tr>
           <tr>
             <td>Jurusan</td>
             <td>:</td>
             <td>
                <select name="jurusan">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                    <option value="Teknik Las">Teknik Las</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Akutansi">Akutansi</option>
                </select>
             </td>
           </tr>
             <td>Alamat</td>
             <td>:</td>
             <td><input type="text" name="alamat" placeholder="alamat" required></td>
           </tr>
           <tr>
             <td>Email</td>
             <td>:</td>
             <td><input type="email" name="email" placeholder="email" required></td>
           </tr>
           <tr>
             <td></td>
             <td></td>
             <td><input type="submit" name="simpan" value="Simpan"></td>
           </tr>
         </table>
    </form>
    <?php
    include 'koneksi.php';
    if(isset($_POST['simpan'])){
    $insert = mysqli_query($conn, "INSERT INTO siswa VALUES 
                            ('".$_POST['nisn']."',
                            '".$_POST['nama_siswa']."',
                            '".$_POST['jurusan']."',
                            '".$_POST['alamat']."',
                            '".$_POST['email']."')");
        if($insert){
            echo 'Berhasil Disimpan';
        }else{
            echo 'Gagal disimpan' .mysqli_error($conn);
        }                     
    }                          
    ?>
</body>
</html>