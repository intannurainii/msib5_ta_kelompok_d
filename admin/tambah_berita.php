<!DOCTYPE html>
<html lang="en">

<head>
<title>OneNews | Tambah Berita</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../img/favicon.png"/>
	<title>Admin</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<!-- Sidebar -->
	<?php $page = 'berita'; include "sidebar.php" ?>

	<!-- Content -->
	<section id="content">
		<!-- Navbar -->
		<nav>
		</nav>

		<!-- Main -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#" class="nav-link">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a id="active" href="#" class="nav-link">Berita</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- Berita -->
			<?php
			include '../koneksi.php';

			// Mendapatkan daftar kategori
			$query_kategori = "SELECT * FROM kategori";
			$result_kategori = mysqli_query($conn, $query_kategori);

			// Mendapatkan daftar penulis
			$query_penulis = "SELECT * FROM penulis";
			$result_penulis = mysqli_query($conn, $query_penulis);
			?>

<!-- Modifikasi atribut onsubmit pada formulir -->
<form action="proses_tambah_berita.php" method="post" name="form" enctype="multipart/form-data" onsubmit="setTanggalPublikasi()" style="box-shadow: 0 0 7px gray; padding: 20px; border: 1px solid grey; border-radius: 10px">
				<h3 style="padding-top:10px; padding-bottom:15px">
					<center>Tambah Berita</center>
				</h3>

				<label class="form-label">Judul Berita</label>
				<input id="judul_berita" type="text" onkeyup="checkform()" name="judul_berita" class="form-control">

				<label class="form-label">Gambar</label>
				<input id="fileToUpload" type="file" onkeyup="checkform()" name="fileToUpload" class="form-control">

				<label class="form-label">Kategori</label>
				<select id="kategori" name="kategori" class="form-control">
					<?php
					if (mysqli_num_rows($result_kategori) > 0) {
						while ($data = mysqli_fetch_array($result_kategori)) {
							echo "<option value='" . $data["id_kategori"] . "'>" . $data["nama_kategori"] . "</option>";
						}
					} else {
						echo "<option value=''>No items available</option>";
					}
					?>
				</select>

				<label class="form-label">Content</label>
				<textarea id="isi_berita" onkeyup="checkform()" name="isi_berita" class="form-control"></textarea>

				<label class="form-label">Penulis</label>
				<select id="penulis" name="penulis" class="form-control">
					<?php
					if (mysqli_num_rows($result_penulis) > 0) {
						while ($data = mysqli_fetch_array($result_penulis)) {
							echo "<option value='" . $data["id_penulis"] . "'>" . $data["nama_penulis"] . "</option>";
						}
					} else {
						echo "<option value=''>No items available</option>";
					}
					?>
				</select>

				<label class="form-label">Editors Picks</label>
				<input type="checkbox" id="editors_picks" name="editors_picks" value="1">

				<input id="submit" class="btn btn-primary" type="submit" name="submit" value="Simpan" style="margin-top:50px; margin-left:25%">
				<button class="btn btn-secondary" style="margin-top:50px; margin-left:3%" onclick="window.location.href='berita.php'">Cancel</button>
			</form>
			<!-- Tambahkan skrip JavaScript -->
<script>
    function setTanggalPublikasi() {
        var tanggalSekarang = new Date();
        var tanggalFormatted = tanggalSekarang.toISOString().slice(0, 10); // Format YYYY-MM-DD
        // Membuat elemen input tanggal secara dinamis dan menyisipkan ke dalam form
        var inputTanggal = document.createElement("input");
        inputTanggal.type = "hidden";
        inputTanggal.name = "tanggal_publish";
        inputTanggal.value = tanggalFormatted;
        document.forms["form"].appendChild(inputTanggal);
    }
</script>

		</main>
	</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>