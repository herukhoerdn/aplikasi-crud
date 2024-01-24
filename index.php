<html>
<head>
  <!-- bosstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<title>Aplikasi CRUD Data Data mahasiswa </title>
    <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Aplikasi CRUD Data mahasiswa</title>
<style>
.table1 {
 font-family: sans-serif;
 color: #444;
 border-collapse: collapse;
 width: 50%;
 border: 1px solid #f2f5f7;
}
.table1 tr th{
 background: #35A9DB;
 color: #fff;
 font-weight: normal;
}
.table1, th, td {
 padding: 8px 20px;
 text-align: left;
}
.table1 tr:hover {
 background-color: #f5f5f5;
}
.table1 tr:nth-child(even) {
 background-color: #f2f2f2;
}
</style>
</head>
<body style="font-family:arial">
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #7FFF00;">
<center><h2>APLIKASI CRUD DATA MAHASISWA</h2></center>
<!-- bosstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</nav
<hr />
<a href="tambah.php" class="btn btn-dark">Tambah Data mahasiswa Baru</a><br /><br />
<div class="container" style="text-decoration: none;">
    <div class="container text-center d-flex-justify-content-center">
        <!-- <div class="row">
            <div class="col"> -->
                <b>Data Mahasiswa</b>
            <!-- </div> -->
         <!-- </div> -->
    </div>
</div>
<table style="width:100%" class="table1">
<!-- <thead class="table1-dark"> -->
     <tr>
         <th>No</th>
         <th>ID Mahasiswa</th>
         <th>NIM</th>
         <th>Nama Lengkap</th>
         <th>Jurusan</th>
         <th>Jenis Kelamin</th>
         <th>Tempat dan Tanggal lahir</th>
         <th>Alamat</th>
         <th>Tahun Masuk</th>
         <th colspan=2><center>Opsi</center></th>
         </tr>
<!-- </thead> -->

 <?php
 include "koneksi.php";
 $no = 1;
 $data = mysqli_query($koneksi,"select * from data_mahasiswa");
 while($r = mysqli_fetch_array($data)){
 $id_mahasiswa = $r['id_mahasiswa'];
 $nim=$r['nim'];
 $nama_lengkap = $r['nama_lengkap'];
 $jurusan = $r['jurusan'];
 $jeins_kelamin= $r['jenis_kelamin'];
 $tanggal_lahir = $r['tanggal_lahir'];
 $alamat= $r['alamat'];
 $tahun_masuk = $r['tahun_masuk'];
 ?>
  <tr><td><?php echo $no++; ?></td>
 <td><?php echo $id_mahasiswa ?></td>
 <td><?php echo $nim ?></td>
 <td><?php echo $nama_lengkap; ?></td>
 <td><?php echo $jurusan; ?></td>
 <td><?php echo $jeins_kelamin; ?></td>
 <td><?php echo $tanggal_lahir; ?></td>
 <td><?php echo $alamat; ?></td>
 <td><?php echo $tahun_masuk; ?></td>
 <td align=right width=70px><a href="edit.php?id=<?php echo
$id_mahasiswa;?>"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a></td>
 <td align=right width=70px><a href="hapus.php?id=<?php echo
$id_mahasiswa;?>"><i class="fa-solid fa-trash fs-5"></i></a></td>
 </tr>
 <?php
 }
 ?>
</table>
</body>
</html>
