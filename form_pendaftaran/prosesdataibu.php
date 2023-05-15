<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $namaibu = $_POST['namaibu'];
        $tlibu = $_POST['tlibu'];
        $pendibu = $_POST['pendibu'];
        $pekerjaanibu = $_POST['pekerjaanibu'];
        $salaryibu = $_POST['salaryibu'];
        $berkebibu = $_POST['berkebibu'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dataibu (namaibu, tlibu, pendibu, pekerjaanibu, salaryibu, berkebibu) VALUES ('$namaibu', '$tlibu', '$pendibu', '$pekerjaanibu', '$salaryibu', '$berkebibu')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Data Keseluruhan Berhasil Disimpan!'); window.location.href='index.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ibu Kandung Gagal Ditambahkan!!');";
        }
      }
?>