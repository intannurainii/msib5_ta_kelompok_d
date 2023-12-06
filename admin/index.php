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
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login/index.php?pesan=belum_login");
	}
	?>

    <!-- Sidebar -->
	<?php include "sidebar.php" ?>
	
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
							<a id="active" href="#" class="nav-link">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-news'></i>
					<span class="text">
						<?php
                        include '../koneksi.php';
                        $data_berita = mysqli_query($conn, "SELECT * FROM berita");
						$jumlah_berita = mysqli_num_rows($data_berita);
                        ?>

						<h3><?php echo $jumlah_berita; ?></h3>
						<p>Berita</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-category'></i>
					<span class="text">
						<?php
                        include '../koneksi.php';
                        $data_kategori = mysqli_query($conn, "SELECT * FROM kategori");
						$jumlah_kategori = mysqli_num_rows($data_kategori);
                        ?>
						
						<h3><?php echo $jumlah_kategori; ?></h3>
						<p>Kategori</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-user'></i>
					<span class="text">
						<?php
                        include '../koneksi.php';
                        $data_penulis = mysqli_query($conn, "SELECT * FROM penulis");
						$jumlah_penulis = mysqli_num_rows($data_penulis);
                        ?>
						
						<h3><?php echo $jumlah_penulis; ?></h3>
						<p>Penulis</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-comment-dots'></i>
					<span class="text">
						<?php
                        include '../koneksi.php';
                        $data_komen = mysqli_query($conn, "SELECT * FROM komen");
						$jumlah_komen = mysqli_num_rows($data_komen);
                        ?>
						
						<h3><?php echo $jumlah_komen; ?></h3>
						<p>Komentar</p>
					</span>
				</li>
			</ul>

		</main>
	</section>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>