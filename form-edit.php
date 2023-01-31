<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM siswa WHERE nisn = '".$_GET['nisn']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <a href="index.php" style="padding:0.4% 0.8%;background-color:#9370DB;color:#fff;border-radius:2px;text-decoration:none;">Data Mahasiswa</a><br><br>

    <form action="" method="POST">
         <table>
           <tr>
             <td>NISN</td>
             <td>:</td>
             <td><input type="text" name="nisn" value="<?php echo $result['nisn']?>" required></td>
           </tr>
           <tr>
             <td>Nama Siswa</td>
             <td>:</td>
             <td><input type="text" name="nama_siswa" value="<?php echo $result['nama_siswa']?>" required></td>
           </tr>
           <td>Jurusan</td>
             <td>:</td>
             <td>
                <select name="jurusan">
                    <option value="<?php echo $result['jurusan'] ?>"><?php echo $result['jurusan'] ?></option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                    <option value="Teknik Las">Teknik Las</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Akutansi">Akutansi</option>
                </select>
             </td>
           </tr>
           <tr>
             <td>Alamat</td>
             <td>:</td>
             <td><input type="text" name="alamat" value="<?php echo $result['alamat']?>" required ></td>
           </tr>
           <tr>
           <td>Email</td>
             <td>:</td>
             <td><input type="email" name="email" value="<?php echo $result['email']?>" required ></td>
           </tr>
           <tr>
             <td></td>
             <td></td>
             <td><input type="submit" name="edit" value="Simpan"></td>
           </tr>
         </table>
    </form>
    <?php
    if(isset($_POST['edit'])){
        $update = mysqli_query($conn, "UPDATE siswa SET nama_siswa = '".$_POST['nama_siswa']."',
        jurusan ='".$_POST['jurusan']."', alamat = '".$_POST['alamat']."', email = '".$_POST['email']."'
        WHERE nisn ='".$_GET['nisn']."'");
        if($update){
            echo 'berhasil edit';
        }else{
            echo 'gagal edit';
        }
    }                          
    ?>
</body>
</html>