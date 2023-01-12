<?php
include 'koneksi.php';

//deklarasi variabel 
$id= "";
$nama = "";
$alamat = "";
$tgl_lahir = "";
$usia = "";
$no_telepon = "";
$jenis_kelamin = "";

$errorMessage = "";
$succesMassage = "";

//Pengecekan Method dari Form

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $usia = $_POST["usia"];
    $no_telepon = $_POST["no_telepon"];
    $jenis_kelamin = $_POST["jenis_kelamin"];

    do{
        //Mengecek apabila ada kolom yang tidak diisi

        if(empty($nama) || empty($alamat) || empty($tgl_lahir) || empty($usia) || empty($no_telepon) || empty($jenis_kelamin)){
            $errorMessage = "Harus mengisi semua data!";
            break;
        }

        //Memasukan data dari form dengan query sql

        $sql = "INSERT INTO pendaftar (id,nama, alamat, tgl_lahir, usia, no_telepon, jenis_kelamin) VALUES ('$id','$nama', '$alamat', '$tgl_lahir', '$usia', '$no_telepon', '$jenis_kelamin')";
        $result = $koneksi->query($sql);

        if (!$result){
            $errorMessage = "Data Tidak Valid" . $koneksi->error;
            break;
        }
        $id = "";
        $nama = "";
        $alamat = "";
        $tgl_lahir = "";
        $usia = "";
        $no_telepon = "";
        $jenis_kelamin = "";

        $succesMassage = "Data berhasil ditambahkan!";

        header("location: beranda.php");
        exit;
    } while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>UTS PEMWEB</title>
	<!-- FAVICON-->
	<link href="juan.jpeg" rel="icon">

	<meta charset="utf-8">
	<meta name="viewport" 
	content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    

    </div>
    <div class="container my-5">
        <h2>Formulir Daftar</h2>

        <?php
        if(!empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
        <div class="row mb-3">
                <label class="col-sm-3 col-form-label1">id</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>">
                </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label1">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label1">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label1">Tanggal Lahir</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label1">Usia</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="usia" value="<?php echo $usia; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label1">No. Telepon</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="no_telepon" value="<?php echo $no_telepon; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label1">Jenis Kelamin</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>">
                </div>
            </div>

            <?php
            if(!empty($succesMassage)){
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-succes alert-dismissible fade show' role='alert'>
                        <strong>$succesMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div> 
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-success" href="halaman.php" role="button">Batal</a>
                </div>
            </div>
        </form>
    </div>
    <footer>
		<div class="container">
			<small>Copyright &copy; 2022 - Froxyez .</small>
		</div>
	</footer>
</body>
</html>
