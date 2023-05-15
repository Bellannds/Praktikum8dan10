<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
    $namaleng = $_POST['namaleng'];
    $jkelamin = $_POST['jkelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tempatlahir = $_POST['tempatlahir'];
    $tglahir = $_POST['tglahir'];
    $agama = $_POST['agama'];
    $kebkhusus = $_POST['kebkhusus'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $namadusun = $_POST['namadusun'];
    $namakel = $_POST['namakel'];
    $kec = $_POST['kec'];
    $kodepos = $_POST['kodepos'];
    $tmpttinggal = $_POST['tmpttinggal'];
    $transport = $_POST['transport'];
    $nohp = $_POST['nohp'];
    $notelp = $_POST['notelp'];
    $email = $_POST['email'];
    $kpspkh = $_POST['kpspkh'];
    $nokpspkh = $_POST['nokpspkh'];
    $kwn = $_POST['kwn'];
    $namanegara = $_POST['namanegara'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO datapribadi (namaleng, jkelamin, nisn, nik, tempatlahir, tglahir, agama, kebkhusus, alamat, rt, rw, namadusun, namakel, kec, kodepos, tmpttinggal, transport, nohp, notelp, email, kpspkh, nokpspkh, kwn, namanegara) VALUES ('$namaleng', '$jkelamin', '$nisn', '$nik', '$tempatlahir', '$tglahir', '$agama', '$kebkhusus', '$alamat', '$rt', '$rw', '$namadusun', '$namakel', '$kec', '$kodepos', '$tmpttinggal', '$transport', '$nohp', '$notelp', '$email', '$kpspkh', '$nokpspkh', '$kwn', '$namanegara')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Ayah!'); window.location.href='formdatayah.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Diri Gagal Ditambahkan!!');";
        }
      }
?>