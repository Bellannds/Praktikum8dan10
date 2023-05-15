<?php
    include 'koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Ayah Kandung</title>

    <!-- import bootsrap css via cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
//variabel yang akan di input
    $namaayah = "";
    $tlayah = "";
    $pendayah = "";
    $pekerjaanayah = "";
    $salaryayah = "";
    $berkebayah = "";

//Variabel Jika terdapat error pada inputan
    $error_namaayah = "";
    $error_tlayah = "";
    $error_pendayah = "";
    $error_pekerjaanayah = "";
    $error_salaryayah = "";
    $error_berkebayah = "";

// Proses Validasi Pada Form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["tlayah"])) {
            $error_tlayah = "Tanggal Lahir Tidak Boleh Kosong";
        } else {
            $tlayah = cek_input($_POST["tlayah"]);
            if (!is_numeric($tlayah)) {
                $error_tlayah = "Tanggal Lahir Hanya Boleh Angka";
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
                    FORM DATA AYAH KANDUNG
                </div>
                <div class="card-body">
                    <form method="post" action="prosesdatayah.php">
                <!---Nama Ayah Kandung--->
                    <div class="form-group row">
                        <label for="namaayah" class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaayah" placeholder="Masukkan Nama Ayah Kandung" id="namaayah" class="form-control <?php echo ($error_namaayah !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namaayah; ?>"> <span class="warning"><?php echo $error_namaayah ?></span>
                        </div>
                    </div><br>
                <!---Tahun Lahir--->
                    <div class="form-group row">
                        <label for="tlayah" class="col-sm-2 col-form-label">Tahun Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tlayah" placeholder="Masukkan Tahun Lahir" id="tlayah" class="form-control <?php echo ($error_tlayah !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $tlayah; ?>"> <span class="warning"><?php echo $error_tlayah ?></span>
                        </div>
                    </div><br>
                <!---Pendidikan Ayah--->
                    <div class="form-group row">
                        <label for="pendayah" class="col-sm-2 col-form-label "> Pendidikan </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="pendayah">
                            <option value="">-Pilih -</option>
                            <option value="1"> Tidak Sekolah </option>
                            <option value="2"> Putus SD </option>
                            <option value="3"> SD Sederajat </option>
                            <option value="4"> SMP Sederajat </option>
                            <option value="5"> SMA Sederajat </option>
                            <option value="6"> D1 </option>
                            <option value="7"> D2 </option>
                            <option value="8"> D3 </option>
                            <option value="9"> D4/S1 </option>
                            <option value="10"> S2 </option>
                            <option value="11"> S3 </option>
                            </select>
                            <span class="warning" ><?php echo $error_pendayah; ?></span>
                        </div>
                    </div><br>
                <!---Pekerjaan Ayah--->
                    <div class="form-group row">
                        <label for="pekerjaanayah" class="col-sm-2 col-form-label "> Pekerjaan </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="pekerjaanayah">
                            <option value="">-Pilih -</option>
                            <option value="1"> Tidak Bekerja </option>
                            <option value="2"> Nelayan </option>
                            <option value="3"> Petani </option>
                            <option value="4"> Peternak </option>
                            <option value="5"> PNS/TNI/POLRI </option>
                            <option value="6"> Karyawan Swasta </option>
                            <option value="7"> Pedagang Kecil </option>
                            <option value="8"> Pedagang Besar </option>
                            <option value="9"> Wiraswasta </option>
                            <option value="10"> Wirausaha </option>
                            <option value="11"> Buruh </option>
                            <option value="12"> Pensiunan </option>
                            <option value="13"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_pekerjaanayah; ?></span>
                        </div>
                    </div><br>
                <!---Penghasilan Ayah--->
                    <div class="form-group row">
                        <label for="salaryayah" class="col-sm-2 col-form-label">Penghasilan Bulanan</label>
                        <div class="col-sm-10">
                            <input type="radio" name="salaryayah" value="1"> < 500.000 </label> <br>
                            <input type="radio" name="salaryayah" value="2"> 500.000 - 999.9999 </label><br>
                            <input type="radio" name="salaryayah" value="3"> 1.000.000 - 1.999.999 </label><br>
                            <input type="radio" name="salaryayah" value="4"> 2.000.000 - 4.999.999 </label><br>
                            <input type="radio" name="salaryayah" value="5"> 5.0000.000 - 20.000.000 </label> <br>
                            <input type="radio" name="salaryayah" value="6"> > 20.000.000 </label>
                            <span class="warning" ><?php echo $error_salaryayah; ?></span>
                        </div>
                    </div><br>
                <!---Kebutuhan Khusus Ayah--->
                    <div class="form-group row">
                        <label for="berkebayah" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="berkebayah">
                            <option value="">- Pilih -</option>
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
                            <span class="warning" ><?php echo $error_berkebayah; ?></span>
                        </div>
                    </div>
                    <!---Button back--->
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10" >
                            <a href="formdataibu.php" class="btn btn-dark float-left">Back</a>
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