<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $namaayah = $_POST['namaayah'];
        $tlayah = $_POST['tlayah'];
        $pendayah = $_POST['pendayah'];
        $pekerjaanayah = $_POST['pekerjaanayah'];
        $salaryayah = $_POST['salaryayah'];
        $berkebayah = $_POST['berkebayah'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dataayah (namaayah, tlayah, pendayah, pekerjaanayah, salaryayah, berkebayah) VALUES ('$namaayah', '$tlayah', '$pendayah', '$pekerjaanayah', '$salaryayah', '$berkebayah')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Ibu Kandung!'); window.location.href='formdataibu.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ayah Kandung Gagal Ditambahkan!!');";
        }
      }
?>