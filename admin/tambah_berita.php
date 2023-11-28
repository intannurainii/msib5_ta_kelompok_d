<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Sidebar -->
	<section id="sidebar">
		<a href="#" class="nav-link" id="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="index.php" class="nav-link">
					<i class='bx bxs-home'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li id="active">
				<a href="berita.php" class="nav-link">
					<i class='bx bxs-news'></i>
					<span class="text">Berita</span>
				</a>
			</li>
			<li>
				<a href="kategori.php" class="nav-link">
					<i class='bx bxs-category'></i>
					<span class="text">Kategori</span>
				</a>
			</li>
			<li>
				<a href="penulis.php" class="nav-link">
					<i class='bx bxs-user'></i>
					<span class="text">Penulis</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" class="nav-link" id="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	
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
						<li><i class='bx bx-chevron-right' ></i></li>
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

			<form action="proses_tambah_berita.php" method="post" name="form" enctype="multipart/form-data" style="box-shadow: 0 0 7px gray; padding: 20px; border: 1px solid grey; border-radius: 10px">
				<h3 style="padding-top:10px; padding-bottom:15px"><center>Tambah Berita</center></h3>

				<label class="form-label">Judul Berita</label>
				<input id="judul_berita" type="text" onkeyup="checkform()" name="judul_berita" class="form-control">

				<label class="form-label">Gambar</label>
				<input id="fileToUpload" type="file" onkeyup="checkform()"  name="fileToUpload"  class="form-control">

				<label class="form-label">Kategori</label>
				<select id="kategori" name="kategori" class="form-control">
					<?php
					if(mysqli_num_rows($result_kategori)>0){
						while($data = mysqli_fetch_array($result_kategori)){
							echo "<option value='" . $data["id_kategori"] . "'>" . $data["nama_kategori"] . "</option>";
						}
					} else {
						echo "<option value=''>No items available</option>";
					}
					?>
				</select>

				<label class="form-label">Content</label>
				<input id="isi_berita" type="text" onkeyup="checkform()" name="isi_berita" class="form-control">

				<label class="form-label">Tanggal Publish</label>
				<input id="tanggal_publish" type="date" onkeyup="checkform()" name="tanggal_publish" class="form-control">

				<label class="form-label">Penulis</label>
				<select id="penulis" name="penulis" class="form-control">
					<?php
					if(mysqli_num_rows($result_penulis)>0){
						while($data = mysqli_fetch_array($result_penulis)){
							echo "<option value='" . $data["id_penulis"] . "'>" . $data["nama_penulis"] . "</option>";
						}
					} else {
						echo "<option value=''>No items available</option>";
					}
					?>
				</select>

				<input id="submit" class="btn btn-primary" type="submit" name="submit" value="Simpan" style="margin-top:20px; margin-left:450px">    
			</form>
        </main>
	</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>