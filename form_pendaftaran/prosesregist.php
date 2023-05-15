<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $nopendaftaran = $_POST['nopendaftaran'];
        $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
        $tglmasuksekolah = $_POST['tglmasuksekolah'];
        $nis = $_POST['nis'];
        $nopesujian= $_POST['nopesujian'];
        $appaud = $_POST['appaud'];
        $aptk = $_POST['aptk'];
        $noskhun = $_POST['noskhun'];
        $noijazah = $_POST['noijazah'];
        $hobi = $_POST['hobi'];
        $citacita = $_POST['citacita'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO registrasi (nopendaftaran, jenis_pendaftaran, tglmasuksekolah, nis, nopesujian, appaud, aptk, noskhun, noijazah, hobi, citacita) VALUES ('$nopendaftaran', '$jenis_pendaftaran', '$tglmasuksekolah', '$nis', '$nopesujian', '$appaud', '$aptk', '$noskhun', '$noijazah', '$hobi', '$citacita')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Diri!'); window.location.href='formdatapribadi.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Registrasi Gagal Ditambahkan!!');";
        }
    }
?>