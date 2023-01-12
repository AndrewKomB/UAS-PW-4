<?php

include 'koneksi.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="data_pendaftar.css">
    <title>Data</title>
</head>
<body>
</div>
    <h1 class="judul">Tabel Pendaftar</h1>
    <div class="tContainer">
        <table class="content-table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Usia</th>
                    <th scope="col">No. Telepon</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $get_user = "SELECT * FROM pendaftar";
                $result = $koneksi->query($get_user);         
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>" . $row["nama"] ."</td>
                        <td>" . $row["alamat"] ."</td>
                        <td>" . $row["tgl_lahir"] ."</td>
                        <td>" . $row["usia"] ."</td>
                        <td>" . $row["no_telepon"] ."</td>
                        <td>" . $row["jenis_kelamin"] ."</td>
                        <td>
                            <a class='btn btn-success btn-sm' href='update.php?id=".$row["id"]."'>Ubah</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id=".$row["id"]."'>Hapus</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer>
		<div class="container">
			<small>Copyright &copy; 2022 - Froxyez .</small>
		</div>
	</footer>
    
</body>
</html>
<