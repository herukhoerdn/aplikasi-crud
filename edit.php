<?php
include "koneksi.php";

if (isset($_POST['submit'])){
    $id=$_POST['id'];
    $nim=$_POST['nim'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $jurusan=$_POST['jurusan'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $alamat=$_POST['alamat'];
    $tahun_masuk=$_POST['tahun_masuk'];
    $jenis_kelamin=$_POST['jenis_kelamin'];

    $sql="UPDATE `data_mahasiswa` SET `nim`='$nim',`nama_lengkap`='$nama_lengkap',
    `jurusan`='$jurusan',`jenis_kelamin`='$jenis_kelamin',`tanggal_lahir`='$tanggal_lahir',
    `alamat`='$alamat',`tahun_masuk`='$tahun_masuk' WHERE id_mahasiswa=$id";

    $result=mysqli_query($koneksi,$sql);
    
    if($result){
        header("location:index.php?msg=New record sucsses");
    }
    else{
        echo"Gagal" .mysqli_error($koneksi);
    }
}

?>
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
</head>
<body style="font-family:arial">
<!-- bosstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#7FFF00;">
<center><h2>APLIKASI CRUD DATA MAHASISWA</h2></center>
</nav>
<hr />
<div class="container" style="text-decoration: none;">
    <div class="text-center mb-4">
        <b>Edit Data</b>
    </div> 
    <?php
    $id =$_GET['id'];

    $sql="SELECT * FROM `data_mahasiswa` WHERE id_mahasiswa=$id LIMIT 1";
    $result=mysqli_query($koneksi,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>   
</div>
 <br/><br/>
<div class="container d-flex-justify-content-center" >
     <form action="edit.php" method="post" name="form1">
        <div class="row">
            <div class="col">
                <label class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim"
                value="<?php echo $row['nim'] ?>">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap"
                value="<?php echo $row['nama_lengkap'] ?>">
                <label class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan"
                value="<?php echo $row['jurusan'] ?>">
                <div class="form-group mb-3">
                    <label>Jenis Kelamin:</label>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="Male" value="Male"
                    <?php echo($row['jenis_kelamin']=='Male')?"checked":""; ?>>
                    <label for="Male" class="form-input-label">Male</label>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="Female" value="Female"
                    <?php echo($row['jenis_kelamin']=='Female')?"checked":""; ?>>
                    <label for="Male" class="form-input-label">Female</label>
                </div>
                <label class="form-label">Tempat dan Tanggal lahir</label>
                <input type="text" class="form-control" name="tanggal_lahir"
                value="<?php echo $row['tanggal_lahir'] ?>">
                <label class="form-label">alamat</label>
                <input type="text" class="form-control" name="alamat"
                value="<?php echo $row['alamat'] ?>">
                <label class="form-label">Tahun Masuk</label>
                <input type="text" class="form-control" name="tahun_masuk"
                value="<?php echo $row['tahun_masuk'] ?>">
                <div>
                     <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <button type="submit" class="btn btn-succses" name="submit">Simpan</button>
                    <a href="index.php" class="btn btn-danger">Batalkan</a>
                </div>
         </form>
 </div>
 <?php
//  if(isset($_POST['Submit'])) {
//  $id_mahasiswa=$_POST['id_mahasiswa'];
//  $nim = $_POST['nim'];
//  $nama_lengkap = $_POST['nama_lengkap'];
//  $jurusan = $_POST['jurusan'];
//  $jenis_kelamin = $_POST['jenis_kelamin'];
//  $tanggal_lahir = $_POST['tanggal_lahir'];
//  $alamat = $_POST['alamat'];
//  $tahun_masuk = $_POST['tahun_masuk'];
//  include "koneksi.php";
//  $update_data = "UPDATE `data_mahasiswa` SET `id_mahasiswa`='[value-1]',`nim`='[value-2]',`nama_lengkap`='[value-3]',
//  `jurusan`='[value-4]',`jenis_kelamin`='[value-5]',`tanggal_lahir`='[value-6]',`alamat`='[value-7]',`tahun_masuk`='[value-8]' WHERE id_mahasiswa=$id_mahasiswa";
//  $kerjakan=mysqli_query($koneksi, $update_data);
//  if($kerjakan)
//  {
//  echo "Data berhasil ditambahkan. <a href='index.php'>Lihat Data Mahasiswa</a>";
//  }
//  else
//  {
//  echo "Maap gagal silahkan coba lagi";
//  }
//  }
 ?>
</body>
</html>
