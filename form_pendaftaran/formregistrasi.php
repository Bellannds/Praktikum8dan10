<?php
    include 'koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Peserta Didik</title>

     <!-- import bootsrap css via cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
//variabel yang akan di input
    $nopendaftaran = "";
    $jenis_pendaftaran = "";
    $tanggalisiformulir= "";
    $tglmasuksekolah = "";
    $nis = "";
    $nopesujian = "";
    $appaud = "";
    $aptk = "";
    $noserskhun = "";
    $noserijazah = "";
    $hobi = "";
    $citacita = "";

//Variabel Jika terdapat error pada inputan
    $error_nopendaftaran = "";
    $error_jenis_pendaftaran = "";
    $error_tanggalisiformulir= "";
    $error_tglmasuksekolah = "";
    $error_nis = "";
    $error_nopesujian = "";
    $error_appaud = "";
    $error_aptk = "";
    $error_noskhun = "";
    $error_noijazah = "";
    $error_hobi = "";
    $error_citacita = "";

    

// Proses Validasi Pada Form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //nis
        if (empty($_POST["nis"])) {
            $error_nis = "NIS Tidak Boleh Kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS Hanya Boleh Angka";
            }
        }
    //no ujian
        if (empty($_POST["nopesujian"])) {
            $error_nopesujian = "No Peserta Ujian Tidak Boleh Kosong";
        } else {
            $nopesujian = cek_input($_POST["nopesujian"]);
            if (!is_numeric($nopesujian)) {
                $error_nopesujian = "Nomor Peserta Ujian Hanya Boleh Angka";
            }
        }
    //no skhun
        if (empty($_POST["noskhun"])) {
            $error_noskhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
        } else {
            $noskhun = cek_input($_POST["noskhun"]);
            if (!is_numeric($noskhun)) {
                $error_noskhun = "Nomor Seri SKHUN Hanya Boleh Angka";
            }
        }
    //no ijazah
        if (empty($_POST["noserijazah"])) {
            $error_noijazah = "No Seri Ijazah Tidak Boleh Kosong";
        } else {
            $noijazah = cek_input($_POST["noijazah"]);
            if (!is_numeric($noijazah)) {
                $error_noijazah = "Nomor Seri Ijazah Hanya Boleh Angka";
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
                <div class="alert alert-dark text-center mt-7 ">
                FORMULIR PESERTA DIDIK
                </div>
                <div class="alert alert-dark mt-7" >
                     FORM REGISTRASI
                </div>
                <div class="card-body">
                    <form method="post" action="prosesregist.php">
                <!---No pendaftaran --->
                    <div class="form-group row">
                        <label for="namanopendaftaran" class="col-sm-2 col-form-label">No. Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopendaftaran" id="nopendaftaran" class="form-control <?php echo ($error_nopendaftaran !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nopendaftaran; ?>"> <span class="warning"><?php echo $error_nopendaftaran ?></span>
                        </div>
                    </div>
                    
                     <!---Jenis pendaftaran --->
                    <br>
                    <div class="form-group row" style="margin-right: 10px;">
                        <label for="jenis_pendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jenis_pendaftaran" value="Siswa Baru">Siswa Baru</label>
                            <input type="radio" name="jenis_pendaftaran" value="Pindahan">Pindahan</label> 
                            <span class="warning" ><?php echo $error_jenis_pendaftaran; ?></span>
                        </div>
                    </div>
                    <!--Tanggal isi formulir--->
                    <div class="form-group row">
                        <label for="web" class="col-sm-2 col-form-label">Tanggal Isi Formulir</label>
                        <div class="col-sm-10">
                            <input type="date" name="tglmasuksekolah" id="tglmasuksekolah" class="form-control <?php echo ($error_tglmasuksekolah !="" ? "is-invalid" : ""); ?>" value="<?php echo $tglmasuksekolah; ?>"> <span class="warning"><?php echo $error_tglmasuksekolah ?></span>
                        </div>
                    </div>
                     <!---Tanggal masuk sekolah --->
                     <div class="form-group row">
                        <label for="web" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                        <div class="col-sm-10">
                            <input type="date" name="tglmasuksekolah" id="tglmasuksekolah" class="form-control <?php echo ($error_tglmasuksekolah !="" ? "is-invalid" : ""); ?>" value="<?php echo $tglmasuksekolah; ?>"> <span class="warning"><?php echo $error_tglmasuksekolah ?></span>
                        </div>
                    </div>
                     <!---Nis --->
                    <div class="form-group row">
                        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" name="nis" id="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" placeholder="Nomor Induk Siswa" value="<?php echo $nis; ?>"> <span class="warning"><?php echo $error_nis ?></span>
                        </div>
                    </div> <br>
                     <!---No ujian --->
                     <div class="form-group row">
                        <label for="nopesujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopesujian" id="nopesujian" class="form-control <?php echo ($error_nopesujian !="" ? "is-invalid" : ""); ?>" placeholder="No Peserta Ujian" value="<?php echo $nopesujian; ?>"> 
                            <span class="warning"><?php echo $error_nopesujian ?></span>
                            <!--text help--->
                            <div id="nopuhelp" class="form-text">**Nomor peserta ujian adalah 20 digit yang tertera dalam sertifikat 
                                <span class="text-danger">SKHUN SD</span>, diisi bagi peserta jenjang SMP
                            </div>
                        </div>
                    </div>
                     <!---paud --->
                    <br>
                    <div class="form-group row" style=" margin-right: 10px;">
                        <label for="aptk" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                        <div class="col-sm-10">
                            <label class="radio-inline"><input type="radio" name="aptk" value="Ya"> Ya</label>
                            <label class="radio-inline"><input type="radio" name="aptk" value="Tidak"> Tidak</label> 
                            <span class="warning" ><?php echo $error_appaud; ?></span>
                        </div>
                    </div>
                     <!---Tk --->
                     <div class="form-group row" style=" margin-right: 10px;">
                        <label for="aptk" class="col-sm-2 col-form-label">Apakah Pernah Tk</label>
                        <div class="col-sm-10">
                            <label class="radio-inline"><input type="radio" name="aptk" value="Ya"> Ya</label>
                            <label class="radio-inline"><input type="radio" name="aptk" value="Tidak"> Tidak</label> 
                            <span class="warning" ><?php echo $error_aptk; ?></span>
                        </div>
                    </div>
                    <!---Skhun--->
                    <div class="form-group row">
                        <label for="noskhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noskhun" id="noskhun" class="form-control <?php echo ($error_noskhun !="" ? "is-invalid" : ""); ?>" placeholder="Masukkan Nomor Skhun" value="<?php echo $noserskhun; ?>"> 
                            <span class="warning"><?php echo $error_noskhun ?></span>
                            <div class="form-text">**Diisi 16 Digit yang tertera di 
                                <span class="text-danger">SKHUN SD</span>-diisi bagi jenjang SMP
                            </div>
                        </div>
                     </div>   
                    <!---Ijazah--->
                    <br>
                    <div class="form-group row">
                        <label for="noijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noijazah" id="noijazah" class="form-control <?php echo ($error_noijazah !="" ? "is-invalid" : ""); ?>" placeholder="Masukkan Nomor Ijazah" value="<?php echo $noserijazah; ?>"> 
                            <span class="warning"><?php echo $error_noijazah ?></span>
                            <div class="form-text">**Diisi 16 Digit yang tertera di 
                                <span class="text-danger">SKHUN SD</span>-diisi bagi jenjang SMP
                            </div>
                        </div>
                    </div>
                     <!---hobi --->
                    <br>
                    <div class="form-group row">
                        <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="hobi">
                            <option value="">-Pilih -</option>
                            <option value="1"> Olahraga </option>
                            <option value="2"> Kesenian</option>
                            <option value="3"> Membaca</option>
                            <option value="4"> Menulis </option>
                            <option value="5"> Traveling </option>
                            <option value="6"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_hobi; ?></span>
                        </div>
                    </div>
                     <!---Cita-cita--->
                    <br>
                    <div class="form-group row">
                        <label for="citacita" class="col-sm-2 col-form-label "> Cita Cita </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="citacita">
                            <option value="">-Pilih -</option>
                            <option value="1"> PNS </option>
                            <option value="2"> TNI/POLRI</option>
                            <option value="3"> Guru/Dosen</option>
                            <option value="4"> Dokter </option>
                            <option value="5"> Politikus </option>
                            <option value="6"> Wiraswasta </option>
                            <option value="7"> Seni/Lukis/Artis/Sejenis </option>
                            <option value="8"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_citacita; ?></span>
                        </div>
                    </div>

                    
                     <!---Button back--->
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10" >
                            <a href="index.php" class="btn btn-dark float-left">Back</a>
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