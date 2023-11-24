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
					<i class='bx bxs-dashboard' ></i>
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
			<a href="#" class="profile">
				<img src="../img/user.png" style="margin-left:1000px">
			</a>
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

            <!-- berita -->
			<?php
			include '../koneksi.php';
			$berita = mysqli_query($conn, "SELECT * from berita as b join kategori as kat on b.id_kategori = kat.id_kategori join penulis as p on b.id_penulis = p.id_penulis join komen as k on b.id_berita = k.id_berita ");
		
			while ($b = mysqli_fetch_array($berita)) {
				$judul_berita = $b["judul_berita"];
				$gambar_berita = $b["gambar_berita"];
				$nama_kategori = $b["id_kategori"]; // Ganti dengan nama kolom yang sesuai di database
				$isi_berita = $b["isi_berita"];
				$tanggal_publish = $b["tanggal_publish"];
				$nama_penulis = $b["id_penulis"]; // Ganti dengan nama kolom yang sesuai di database
				$isi_komen = $b["id_komen"]; // Ganti dengan nama kolom yang sesuai di database
				}
			?>

            <form action="proses_edit_berita.php?id_berita=<?php echo $id_berita ?>" method="post" enctype="multipart/form-data" style="box-shadow: 0 0 7px gray; padding: 20px; border: 1px solid grey; border-radius: 10px">
                <h3 style="padding-top:10px; padding-bottom:15px"><center>Edit Berita</center></h3>

				<label class="form-label">Judul Berita</label>
				<input id="judul_berita" type="text" onkeyup="checkform()" name="judul_berita" class="form-control">

				<label class="form-label">Gambar</label>
                <img src="<?php echo $gambar_berita ?>" alt="" width="100" style="margin-bottom:15px">
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" value="<?php echo $gambar_berita ?>">

				<label class="form-label">Kategori</label>
				<select id="id_kategori" name="id_kategori" class="form-control">
					<?php
					while ($row_kategori = mysqli_fetch_assoc($result_kategori)) {
						echo "<option value='{$row_kategori['id_kategori']}'>{$row_kategori['nama_kategori']}</option>";
					}
					?>
				</select>

				<label class="form-label">Content</label>
				<input id="isi_berita" type="text" onkeyup="checkform()" name="isi_berita" class="form-control">

				<label class="form-label">Tanggal Publish</label>
				<input id="tanggal_publish" type="date" onkeyup="checkform()" name="tanggal_publish" class="form-control">

				<label class="form-label">Penulis</label>
				<select id="id_penulis" name="id_penulis" class="form-control">
					<?php
					while ($row_penulis = mysqli_fetch_assoc($result_penulis)) {
						echo "<option value='{$row_penulis['id_penulis']}'>{$row_penulis['nama_penulis']}</option>";
					}
					?>
				</select>

				<label class="form-label">Komen</label>
				<input id="isi_komen" type="text" onkeyup="checkform()" name="isi_komen" class="form-control">


				<input id="submit" class="btn btn-primary" type="submit" name="submit" value="Simpan" style="margin-top:20px; margin-left:450px">    
			</form>
        </main>
	</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>