<?php 
include 'database_0001.php';
$db_0001 = new Database();

$aksi = $_GET['aksi'];
    
 if($aksi == "tambah"){
    $db_0001->tambahData($_POST['nama'], $_POST['alamat'], $_POST['no_hp'], $_POST['jns_kelamin'],$_POST['gambar']);
    header("location:index_0001.php");

} else if ($aksi == "update"){
    $db_0001->updateData($_POST['id'],$_POST['nama'], $_POST['alamat'], $_POST['no_hp'], $_POST['jns_kelamin']);
        echo "<script>alert('Data Telah Di Edit!');</script>";

    header("location:index_0001.php");

} else if ($aksi == "hapus"){
    $db_0001->hapusData($_GET['id']);
    header("location:index_0001.php");

} else if ($aksi == "rinci"){
    $db_0001->rinciData($_POST['nama'], $_POST['alamat'], $_POST['no_hp'], $_POST['jns_kelamin']);
    header("location:index_0001.php");

} 


?>