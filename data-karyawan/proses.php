<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$jabatan = $_POST['jabatan'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$gaji = $_POST['gaji'];

#3. menulis query
$simpan = "INSERT INTO karyawan (id_karyawan,nama_karyawan,jabatan,tanggal_masuk,gaji) VALUES ('$id_karyawan','$nama_karyawan','$jabatan','$tanggal_masuk','$gaji')";

#4. jalankan query
$proses = mysqli_query($koneksi,$simpan); 

#5. mengalihkan halaman 
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>