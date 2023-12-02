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
			// Include file koneksi database dan proses edit
			include '../koneksi.php';

			// Ambil ID berita dari parameter URL
			$id_berita = $_GET['id_berita'];

			// Query untuk mendapatkan data yang akan diedit
			$query = "SELECT * FROM berita AS b
					JOIN kategori AS kat ON b.id_kategori = kat.id_kategori
					JOIN penulis AS p ON b.id_penulis = p.id_penulis WHERE b.id_berita = '$id_berita'";

			$result = mysqli_query($conn, $query);

			// Memeriksa apakah data ditemukan
			if ($data = mysqli_fetch_assoc($result)) {
				// Ambil data dari hasil query
				$judul_berita = $data['judul_berita'];
				$gambar_berita = $data['gambar_berita'];
				$nama_kategori = $data['nama_kategori'];
				$isi_berita = $data['isi_berita'];
				$tanggal_publish = $data['tanggal_publish'];
				$nama_penulis = $data['nama_penulis'];

				?>

			<form action="proses_edit_berita.php?id_berita=<?php echo $id_berita ?>" method="post" enctype="multipart/form-data" style="box-shadow: 0 0 7px gray; padding: 20px; border: 1px solid grey; border-radius: 10px">
				<h3 style="padding-top:10px; padding-bottom:15px"><center>Edit Berita</center></h3>
				
				<label for="judul_berita">Judul Berita:</label>
				<input type="text" onkeyup="checkform()" name="judul_berita" class="form-control" value="<?php echo $judul_berita; ?>">
				
				<label for="fileToUpload">Gambar:</label><br>
				<img src="../img/berita/<?php echo $gambar_berita; ?>" alt="Gambar Berita" width="100" style="margin-bottom:15px">
				<input type="file" name="fileToUpload" id="fileToUpload" class="form-control" value="<?php echo $gambar_berita ?>">
				
				<label for="id_kategori">Kategori:</label>
				<select name="id_kategori" class="form-control">
					<?php
					// Ambil data kategori dari database
					$query_kategori = "SELECT * FROM kategori";
					$result_kategori = mysqli_query($conn, $query_kategori);

					// Tampilkan data kategori sebagai opsi dropdown
					while ($row_kategori = mysqli_fetch_assoc($result_kategori)) {
						$selected = ($row_kategori['nama_kategori'] == $nama_kategori) ? "selected" : "";
						echo "<option value='{$row_kategori['id_kategori']}' $selected>{$row_kategori['nama_kategori']}</option>";
					}
					?>
				</select>
			
				<label for="isi_berita">Isi Berita:</label>
				<textarea id="isi_berita" type="text" onkeyup="checkform()" name="isi_berita" class="form-control"><?php echo $isi_berita; ?></textarea>
				
				<label for="tanggal_publish">Tanggal Publish:</label>
				<input id="tanggal_publish" type="date" onkeyup="checkform()" name="tanggal_publish" class="form-control" value="<?php echo $tanggal_publish; ?>">
				
				<label for="id_penulis">Penulis:</label>
				<select id="id_penulis" name="id_penulis" class="form-control">
					<?php
					// Ambil data penulis dari database
					$query_penulis = "SELECT * FROM penulis";
					$result_penulis = mysqli_query($conn, $query_penulis);

					// Tampilkan data penulis sebagai opsi dropdown
					while ($row_penulis = mysqli_fetch_assoc($result_penulis)) {
						$selected = ($row_penulis['nama_penulis'] == $nama_penulis) ? "selected" : "";
						echo "<option value='{$row_penulis['id_penulis']}' $selected>{$row_penulis['nama_penulis']}</option>";
					}
					?>
				</select> 
				<input id="submit" class="btn btn-primary" type="submit" name="submit" value="Simpan" style="margin-top:20px; margin-left:450px" onclick="return confirm('Simpan perubahan data?')">    
        	</form>
        </main>
	</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
<?php
} else {
    // Menampilkan pesan jika data tidak ditemukan
    echo "Data tidak ditemukan.";
}
?>