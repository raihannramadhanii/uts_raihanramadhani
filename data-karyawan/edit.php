<?php
#1. koneksi ke database
include("../koneksi.php");

#2. ambil id yg akan disunting
$id = $_GET['id'];

#3. mengambil semua record data berdasarkan id yg dipilih
$ambil = "SELECT * FROM karyawan WHERE id='$id'";
 
#4. menjalankan query 
$edit = mysqli_query($koneksi,$ambil);

#5. memisahkan record data berdasarkan kolom/field
$data = mysqli_fetch_array($edit);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<?php
    include_once('../navbar.php');
    ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8m-auto">
        <div class="card">
  <div class="card-header">
    <h3 class="float-start">Form Edit Data Karyawan</h3>
    
  </div>
  <div class="card-body">
  <form action="update.php" method="POST">
    <input type="hidden" name="id"  value="<?=$data['id'] ?>">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id Karyawan</label>
    <input type="text" readonly value="<?=$data['id_karyawan'] ?>" name="id_karyawan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
    <input type="text" readonly value="<?=$data['nama_karyawan'] ?>" name="nama_karyawan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
    <input type="text" value="<?=$data['jabatan'] ?>" name="jabatan"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Masuk</label>
    <input type="date" value="<?=$data['tanggal_masuk'] ?>" name="tanggal_masuk"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gaji</label>
    <input type="text" value="<?=$data['gaji'] ?>" name="gaji"  class="form-control" id="exampleInputPassword1">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
  </div> 
  </div>
  </div>
</div>
</div>


   <script src="../js/bootstrap.js"></script> 
   <script src="../js/bootstrap.bundle.js"></script>
   <script src="../js/all.js"></script> 
   
</body>
</html>
</head>
<body>
    
</body>
</html>