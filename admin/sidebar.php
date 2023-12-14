<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../img/favicon.png"/>
    <title>Sidebar</title>
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
	<section id="sidebar">
		<a href="#" class="nav-link" id="brand" style="margin-left:50px">
			<img src="../img/favicon.png"  alt="logo" width="40px" />
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="<?php if($page=='index'){echo 'active';} ?>">
				<a href="index.php" class="nav-link">
					<i class='bx bxs-home' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="<?php if($page=='berita'){echo 'active';} ?>">
				<a href="berita.php" class="nav-link">
					<i class='bx bxs-news'></i>
					<span class="text">Berita</span>
				</a>
			</li>
			<li class="<?php if($page=='kategori'){echo 'active';} ?>">
				<a href="kategori.php" class="nav-link">
					<i class='bx bxs-category'></i>
					<span class="text">Kategori</span>
				</a>
			</li>
			<li class="<?php if($page=='penulis'){echo 'active';} ?>">
				<a href="penulis.php" class="nav-link">
					<i class='bx bxs-user'></i>
					<span class="text">Penulis</span>
				</a>
			</li>
			<li class="<?php if($page=='komentar'){echo 'active';} ?>">
				<a href="komentar.php" class="nav-link">
					<i class='bx bxs-comment-dots'></i>
					<span class="text">Komentar</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="proses_logout.php" class="nav-link" id="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>