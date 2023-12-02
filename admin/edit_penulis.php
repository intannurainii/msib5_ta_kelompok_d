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
			<li>
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
			<li id="active">
				<a href="penulis.php" class="nav-link">
					<i class='bx bxs-user'></i>
					<span class="text">Penulis</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" class="nav-link" id="logout">
					<i class='bx bxs-log-out-circle'></i>
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
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a id="active" href="#" class="nav-link">Penulis</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- Penulis -->
			<?php
			include '../koneksi.php';

			$penulis = mysqli_query($conn, "SELECT * from penulis where id_penulis='$_GET[id_penulis]'");

			while ($p = mysqli_fetch_array($penulis)) {
				$id_penulis = $p["id_penulis"];
				$nama_penulis = $p["nama_penulis"];
				$email_penulis = $p["email_penulis"];
				$foto_profil = $p["foto_profil"];
			}
			?>

			<form action="proses_edit_penulis.php?id_penulis=<?php echo $id_penulis ?>" method="post" enctype="multipart/form-data" style="box-shadow: 0 0 7px gray; padding: 20px; border: 1px solid grey; border-radius: 10px">
				<h3 style="padding-top:10px; padding-bottom:15px">
					<center>Edit Data Penulis</center>
				</h3>

				<label class="form-label">Nama Penulis</label>
				<input type="text" name="nama_penulis" class="form-control" value="<?php echo $nama_penulis ?>">

				<label class="form-label">Email Penulis</label>
				<input type="text" name="email_penulis" class="form-control" value="<?php echo $email_penulis ?>">

				<label class="form-label">Foto Profil</label><br>
				<img src="../img/berita/<?php echo $foto_profil ?>" alt="" width="100" style="margin-bottom:15px">
				<input type="file" name="fileToUpload" id="fileToUpload" class="form-control" value="<?php echo $foto_profil ?>">

				<input class="btn btn-primary" type="submit" name="submit" value="Simpan" style="margin-top:20px; margin-left:450px" onclick="return confirm('Simpan perubahan data?')">
			</form>
		</main>
	</section>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>