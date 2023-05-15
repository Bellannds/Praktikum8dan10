<?php
    include 'koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Diri</title>

    <!-- import bootsrap css via cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
//variabel yang akan di input
    $namaleng = "";
    $jkelamin = "";
    $nisn = "";
    $nik = "";
    $tempatlahir = "";
    $tglahir = "";
    $agama = "";
    $kebkhusus = "";
    $alamat = "";
    $rt = "";
    $rw = "";
    $namadusun = "";
    $namakel = "";
    $kec = "";
    $kodepos = "";
    $tmpttinggal = "";
    $transport = "";
    $nohp = "";
    $notelp = "";
    $email = "";
    $kpspkh = "";
    $nokpspkh = "";
    $kwn = "";
    $namanegara = "";

//Variabel Jika terdapat error pada inputan
    $error_namaleng = "";
    $error_jkelamin = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tempatlahir = "";
    $error_tglahir = "";
    $error_agama = "";
    $error_kebkhusus = "";
    $error_alamat = "";
    $error_rt = "";
    $error_rw = "";
    $error_namadusun = "";
    $error_namakel = "";
    $error_kec = "";
    $error_kodepos = "";
    $error_tmpttinggal = "";
    $error_transport = "";
    $error_nohp = "";
    $error_notelp = "";
    $error_email = "";
    $error_kpspkh = "";
    $error_nokpspkh = "";
    $error_kwn = "";
    $error_namanegara = "";

    
// Proses Validasi Pada Form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nisn
        if (empty($_POST["nisn"])) {
            $error_nisn = "NISN Tidak Boleh Kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
            if (!is_numeric($nisn)) {
                $error_nisn = "NISN Hanya Boleh Angka";
            }
        }
    //Nik
        if (empty($_POST["nik"])) {
            $error_nik = "NIK Tidak Boleh Kosong";
        } else {
            $nik = cek_input($_POST["nik"]);
            if (!is_numeric($nik)) {
                $error_nik = "NIK Hanya Boleh Angka";
            }
        }
    //No hp
        if (empty($_POST["nohp"])) {
            $error_nohp = "Nomor HP Tidak Boleh Kosong";
        } else {
            $nohp = cek_input($_POST["nohp"]);
            if (!is_numeric($nohp)) {
                $error_nohp = "Nomor HP Hanya Boleh Angka";
            }
        }
    //Email
        if (empty($_POST["email"])) {
            $error_email = "Email Tidak Boleh Kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format Email Invalid";
            }
        }

    }
//function untuk mengecek inputan
    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    
<div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card">
                <div class="alert alert-dark mt-7">
                     FORM DATA DIRI
                </div>
                <div class="card-body">
                    <form method="post" action="prosesdatapribadi.php">
                <!--- Nama lengkap--->
                    <div class="form-group row">
                        <label for="namaleng" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaleng" id="namaleng" class="form-control" placeholder="Masukkan Nama Lengkap" <?php echo ($error_namaleng !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namaleng; ?>"> <span class="warning"><?php echo $error_namaleng ?></span>
                        </div>
                    </div>
                <!--Jenis Kelamin--->
                    <br>
                    <div class="form-group row">
                        <label for="jkelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jkelamin" value="Laki Laki">Laki-Laki</label>
                            <input type="radio" name="jkelamin" value="Perempuan">Perempuan</label> 
                            <span class="warning" ><?php echo $error_jkelamin; ?></span>
                        </div>
                    </div>
                <!---Nisn--->
                    <div class="form-group row">
                        <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                        <div class="col-sm-10">
                            <input type="text" name="nisn" id="nisn" class="form-control" placeholder="Masukkan NISN" <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nisn; ?>"> <span class="warning"><?php echo $error_nisn ?></span>
                        </div>
                    </div> <br>
                <!---Nik--->
                    <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" name="nik" id="nopesunikjian" class="form-control" placeholder="Masukkan NIK<?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" placeholder="3524xxxxxxxx" value="<?php echo $nik; ?>"> <span class="warning"><?php echo $error_nik ?></span>
                        </div>
                    </div> <br>
                <!---Tempat lahir--->
                <div class="form-group row">
                        <label for="web" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tglmasuksekolah"  placeholder="Masukkan Tempat Lahir"id="tglmasuksekolah" class="form-control  <?php echo ($error_tempatlahir !="" ? "is-invalid" : ""); ?>" value="<?php echo $tempatlahir; ?>"> <span class="warning"><?php echo $error_tempatlahir ?></span>
                        </div>
                    </div>
                <!--Tanggal lahir--->
                    <br>
                    <div class="form-group row">
                        <label for="tglahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="tglahir" id="tglahir" class="form-control" <?php echo ($error_tglahir !="" ? "is-invalid" : ""); ?>" placeholder="XX-Bulan-XXXX" value="<?php echo $tglahir; ?>"> <span class="warning"><?php echo $error_tglahir ?></span>
                        </div>
                    </div> <br>
                <!--- Agama --->
                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="agama">
                            <option value="">-Pilih -</option>
                            <option value="1"> Islam </option>
                            <option value="2"> Kristen/Protestan </option>
                            <option value="3"> Katholik </option>
                            <option value="4"> Hindu </option>
                            <option value="5"> Budha </option>
                            <option value="6"> Konghucu </option>
                            <option value="7"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> <br>
                <!---Berkebutuhan khusus pribadi--->
                    <div class="form-group row">
                        <label for="kebkhusus" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="kebkhusus">
                            <option value="">-Pilih -</option>
                            <option value="1"> Tidak </option>
                            <option value="2"> Netra (A) </option>
                            <option value="3"> Rungu (B) </option>
                            <option value="4"> Grahita Ringan (C) </option>
                            <option value="5"> Grahita Sedang (C1) </option>
                            <option value="6"> Daksa Ringan (D) </option>
                            <option value="7"> Laras (E) </option>
                            <option value="8"> Wicara (F) </option>
                            <option value="9"> Tuna Ganda (G) </option>
                            <option value="10"> Hiper Aktif (H) </option>
                            <option value="11"> Cerdas Istimewa (I) </option>
                            <option value="12"> Bakat Istimewa (J) </option>
                            <option value="13"> Kesulitan Belajar (K) </option>
                            <option value="14"> Narkoba (N) </option>
                            <option value="15"> Indigo (O) </option>
                            <option value="16"> Down Syndrom (P) </option>
                            <option value="17"> Autis (Q) </option>
                            <option value="18"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_kebkhusus; ?></span>
                        </div>
                    </div>
                    <!---Alamat--->
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" placeholder="Masukkan Alamat" id="alamat" class="form-control" <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $alamat; ?>"> <span class="warning"><?php echo $error_alamat ?></span>
                        </div>
                    </div>
                     <!---RT--->
                    <br>
                    <div class="form-group row">
                        <label for="rt" class="col-sm-2 col-form-label">RT</label>
                        <div class="col-sm-10">
                            <input type="text" name="rt" id="rt" placeholder="Masukkan RT" class="form-control" <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $rt; ?>"> <span class="warning"><?php echo $error_rt ?></span>
                        </div>
                    </div>
                     <!---Alamat--->
                    <br>
                    <div class="form-group row">
                        <label for="rw" class="col-sm-2 col-form-label">RW</label>
                        <div class="col-sm-10">
                            <input type="text" name="rw" id="rw" placeholder="Masukkan RW" class="form-control" <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $rw; ?>"> <span class="warning"><?php echo $error_rw ?></span>
                        </div>
                    </div>
                     <!---Dusun--->
                    <br>
                    <div class="form-group row">
                        <label for="namadusun" class="col-sm-2 col-form-label">Nama Dusun</label>
                        <div class="col-sm-10">
                            <input type="text" name="namadusun" id="namadusun" placeholder="Masukkan Dusun" class="form-control" <?php echo ($error_namadusun !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namadusun; ?>"> <span class="warning"><?php echo $error_namadusun ?></span>
                        </div>
                    </div> <br>
                     <!---Kelurahan/desa--->
                    <div class="form-group row">
                        <label for="namakel" class="col-sm-2 col-form-label">Nama Kelurahan/desa</label>
                        <div class="col-sm-10">
                            <input type="text" name="namakel" id="namakel"  placeholder="Masukkan Kelurahan/desa" class="form-control" <?php echo ($error_namakel !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namakel; ?>"> <span class="warning"><?php echo $error_namakel ?></span>
                        </div>
                    </div> <br>
                     <!---Kecamatan--->
                    <div class="form-group row">
                        <label for="kec" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="kec" id="kec" placeholder="Masukkan Kecamatan" class="form-control" <?php echo ($error_kec !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $kec; ?>"> <span class="warning"><?php echo $error_kec ?></span>
                        </div>
                    </div> <br>
                     <!---Kode pos--->
                    <div class="form-group row">
                        <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-10">
                            <input type="text" name="kodepos" id="kodepos" placeholder="Masukkan Kodepos" class="form-control" <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" placeholder="xxxxxx" value="<?php echo $kodepos; ?>"> <span class="warning"><?php echo $error_kodepos ?></span>
                        </div>
                    </div> <br>
                     <!---Tempat tinggal--->
                    <div class="form-group row">
                        <label for="tmpttinggal" class="col-sm-2 col-form-label "> Tempat Tinggal </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="tmpttinggal">
                            <option value="">- Pilih -</option>
                            <option value="1"> Bersama Orang Tua </option>
                            <option value="2"> Wali </option>
                            <option value="3"> Kos </option>
                            <option value="4"> Asrama </option>
                            <option value="5"> Panti Asuhan </option>
                            <option value="6"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> <br>
                     <!---Transportasi--->
                    <div class="form-group row">
                        <label for="transport" class="col-sm-2 col-form-label "> Moda Transportasi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="transport">
                            <option value="">- Pilih -</option>
                            <option value="1"> Jalan Kaki </option>
                            <option value="2"> Kendaraan Pribadi </option>
                            <option value="3"> Kendaraan Umum/Angkot/Pete-Pete </option>
                            <option value="4"> Jemputan Sekolah </option>
                            <option value="5"> Kereta Api </option>
                            <option value="6"> Ojek </option>
                            <option value="7"> Andong/Bedi/Sado/Dokar/Delman/Becak </option>
                            <option value="8"> Perahu Penyebrangan/Rakit/Getek </option>
                            <option value="9"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> <br>
                     <!---No hp--->
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nohp" id="nohp"  placeholder="Masukkan No. Hp" class="form-control" <?php echo ($error_nohp !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $nohp; ?>"> <span class="warning"><?php echo $error_nohp ?></span>
                        </div>
                    </div> <br>
                     <!---No telepone--->
                    <div class="form-group row">
                        <label for="notelp" class="col-sm-2 col-form-label">Nomor Telepone</label>
                        <div class="col-sm-10">
                            <input type="text" name="notelp" id="notelp"  placeholder="Masukkan Telepone" class="form-control" <?php echo ($error_notelp !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $notelp; ?>"> <span class="warning"><?php echo $error_notelp ?></span>
                        </div>
                    </div> <br>
                     <!---Email--->
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email </label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" placeholder="Isikan dengan akhiran @gmail.com"class="form-control" <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $email; ?>"> <span class="warning"><?php echo $error_email ?></span>
                        </div>
                    </div> <br>
                     <!---kip--->
                    <div class="form-group row">
                        <label for="kpspkh" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="radio" name="kpspkh" value="Ya">Ya</label>
                            <input type="radio" name="kpspkh" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_kpspkh; ?></span>
                        </div>
                    </div> <br>
                     <!---No kip--->
                    <div class="form-group row">
                        <label for="nokpspkh" class="col-sm-2 col-form-label">Nomor KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nokpspkh" id="nokpspkh" placeholder="Masukkan No. KIP" class="form-control" <?php echo ($error_nokpspkh !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $nokpspkh; ?>"> <span class="warning"><?php echo $error_nokpspkh ?></span>
                        </div>
                    </div> <br>
                     <!---Kewarganegaraan--->
                    <div class="form-group row">
                        <label for="appaud" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                            <input type="radio" name="kwn" value="Indonesia (WNI)">Indonesia (WNI)</label>
                            <input type="radio" name="kwn" value="Asing (WNA)">Asing (WNA)</label> 
                            <span class="warning" ><?php echo $error_kwn; ?></span>
                        </div>
                    </div> <br>
                     <!---Negara-->
                    <div class="form-group row">
                        <label for="namanegara" class="col-sm-2 col-form-label">Nama Negara</label>
                        <div class="col-sm-10">
                            <input type="text" name="namanegara" id="namanegara" placeholder="Masukkan Negara" class="form-control" <?php echo ($error_namanegara !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namanegara; ?>"> <span class="warning"><?php echo $error_namanegara ?></span>
                        </div>
                    </div>
                    <!---Button back--->
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10" >
                            <a href="formregistrasi.php" class="btn btn-dark float-left">Back</a>
                        </div>
                    </div>
                     <!---Button next --->
                    <div class="form-group row">
                        <div class="col-sm-10 mt-3">
                            <button type="submit" name="submit" class="btn btn-dark float-right">Next</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>