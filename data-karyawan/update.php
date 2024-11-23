<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$id_karyawan = $_POST['id'];
$nama_karyawan = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$tanggal_masuk = $_POST['tanggal'];
$gaji = $_POST['gaji'];

#3. menulis query
$sunting = "UPDATE karyawan SET id='$id_karyawan', nama='$nama_karyawan', jabatan='$jabatan', tanggal='$tanggal_masuk', gaji='$gaji' WHERE id='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi,$sunting);

#5. mengalihkan halaman 
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>