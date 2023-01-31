<?php
include 'koneksi.php';
if(isset($_GET['nisn'])){
    $delete = mysqli_query($conn, "DELETE FROM siswa WHERE nisn = '".$_GET['nisn']."' ");
    header('location:index.php');
}
?>