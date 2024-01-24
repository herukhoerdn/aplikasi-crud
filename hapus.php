<?php
include "koneksi.php";
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM data_mahasiswa WHERE id_mahasiswa =$id");
header("Location:index.php");
?>
