<?php
    include 'koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Ibu Kandung</title>

    <!-- import bootsrap css via cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
//variabel yang akan di input
    $namaibu = "";
    $tlibu = "";
    $pendibu = "";
    $pekerjaanibu = "";
    $salaryibu = "";
    $berkebibu = "";

//Variabel Jika terdapat error pada inputan
    $error_namaibu = "";
    $error_tlibu = "";
    $error_pendibu = "";
    $error_pekerjaanibu = "";
    $error_salaryibu = "";
    $error_berkebibu = "";

// Proses Validasi Pada Form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["tlibu"])) {
            $error_tlibu = "Tanggal Lahir Tidak Boleh Kosong";
        } else {
            $tlayah = cek_input($_POST["tlibu"]);
            if (!is_numeric($tlibu)) {
                $error_tlibu = "Tanggal Lahir Hanya Boleh Angka";
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
                    FORM DATA IBU KANDUNG
                </div>
                <div class="card-body">
                    <form method="post" action="prosesdataibu.php">
                <!---Nama ibu kandung--->
                    <div class="form-group row">
                        <label for="namaibu" class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaibu" placeholder="Masukkan Nama Ibu Kandung" id="namaibu" class="form-control <?php echo ($error_namaibu !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namaibu; ?>"> <span class="warning"><?php echo $error_namaibu ?></span>
                        </div>
                    </div><br>
                <!---Masukkan Tahun Lahir--->
                    <div class="form-group row">
                        <label for="tlibu" class="col-sm-2 col-form-label">Tahun Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tlibu" placeholder="Masukkan Tahun Lahir" id="tlibu" class="form-control <?php echo ($error_tlibu !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $tlibu; ?>"> <span class="warning"><?php echo $error_tlibu ?></span>
                        </div>
                    </div><br>
                <!---Pendidikan ibu--->
                    <div class="form-group row">
                        <label for="pendibu" class="col-sm-2 col-form-label "> Pendidikan </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="pendibu">
                            <option value="">- Pilih -</option>
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
                            <span class="warning" ><?php echo $error_pendibu; ?></span>
                        </div>
                    </div><br>
                <!---Pekerjaan ibu--->
                    <div class="form-group row">
                        <label for="pekerjaanibu" class="col-sm-2 col-form-label "> Pekerjaan </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="pekerjaanibu">
                            <option value="">- Pilih -</option>
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
                            <span class="warning" ><?php echo $error_pekerjaanibu; ?></span>
                        </div>
                    </div><br>
                <!---Penghasilan ibu--->
                    <div class="form-group row">
                        <label for="salaryibu" class="col-sm-2 col-form-label">Penghasilan Bulanan</label>
                        <div class="col-sm-10">
                            <input type="radio" name="salaryibu" value="1"> < 500.000 </label> <br>
                            <input type="radio" name="salaryibu" value="2"> 500.000 - 999.9999 </label><br>
                            <input type="radio" name="salaryibu" value="3"> 1.000.000 - 1.999.999 </label><br>
                            <input type="radio" name="salaryibu" value="4"> 2.000.000 - 4.999.999 </label><br>
                            <input type="radio" name="salaryibu" value="5"> 5.0000.000 - 20.000.000 </label> <br>
                            <input type="radio" name="salaryibu" value="6"> > 20.000.000 </label>
                            <span class="warning" ><?php echo $error_salaryibu; ?></span>
                        </div>
                    </div><br>
                <!--Kebutuhan khusus ibu--->
                    <div class="form-group row">
                        <label for="berkebibu" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="berkebibu">
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
                            <span class="warning" ><?php echo $error_berkebibu; ?></span>
                        </div>
                    </div>
                    <!---Button submit--->
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10" >
                            <a href="index.php" class="btn btn-dark float-left">Submit</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>