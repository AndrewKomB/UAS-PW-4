<?php
include 'koneksi.php';

$id = "";
$nama = "";
$alamat = "";
$tgl_lahir = "";
$usia = "";
$no_telepon = "";
$jenis_kelamin = "";

$errorMessage = "";
$succesMassage = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!isset($_GET["id"])){
        header("location: halaman.php");
        exit;
    }

    $id = $_GET["id"];
    $sql = "SELECT * FROM pendaftar WHERE id=$id";
    $result = $koneksi->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: halaman.php");
        exit;
    }

    $nama = $row["nama"];
    $alamat = $row["alamat"];
    $tgl_lahir = $row["tgl_lahir"];
    $usia = $row["usia"];
    $no_telepon = $row["no_telepon"];
    $jenis_kelamin = $row["jenis_kelamin"];
}else{

    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $usia = $_POST["usia"];
    $no_telepon = $_POST["no_telepon"];
    $jenis_kelamin = $_POST["jenis_kelamin"];

    do{
        if(empty($id) || empty($nama) || empty($alamat) || empty($tgl_lahir) || empty($usia) || empty($no_telepon) || empty($jenis_kelamin)){
            $errorMessage = "Harus mengisi semua data!";
            break;
        }

        $sql = "UPDATE pendaftar SET id = '$id', nama = '$nama', alamat = '$alamat', tgl_lahir = '$tgl_lahir', usia = '$usia', no_telepon = '$no_telepon', jenis_kelamin = '$jenis_kelamin' WHERE id = $id";
        $result = $koneksi->query($sql);

        if(!$result){
            $errorMessage = "Data Tidak Valid" . $koneksi->error;
            break;
        }

        $succesMassage = "Data berhasil diubah!";
        header("location: data_pendaftar.php");
        exit;
    }while(false);
}
?>

<!DOCTYPE html>
<html>
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
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.facebook.com/adi.teguh.733/"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://youtu.be/t50ZDZ_obBU"><i class="fab fa-youtube"></i></a></li>
				<li><a href="https://www.instagram.com/_froxyez/"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://open.spotify.com/user/312cuopntgssn24firczfhqkcpiu?si=fnK6pCADRm-wgTh9ROXD8w&utm_source=copy-link"><i class="fab fa-spotify"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="data_pendaftar.php">Froxyez</a></h1>
			<ul>
				<li class="active"><a href="halaman.php">Beranda</a></li>
				<li><a href="about.html">Tentang</a></li>
				<li><a href="service.html">Layanan</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</header>
    <div class="container my-5">
        <h2>Formulir Ubah</h2>

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
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label1">id</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>">
                </div>
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
                    <a class="btn btn-outline-success" href="data_pendaftar.php" role="button">Batal</a>
                </div>
            </div>
        </form>
    </div>

    </body>
</html>