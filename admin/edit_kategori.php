<!DOCTYPE html>
<html lang="en">
<head>
<title>OneNews | Edit Kategori</title>

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
	<?php $page = 'kategori'; include "sidebar.php" ?>
	
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
							<a id="active" href="#" class="nav-link">Kategori</a>
						</li>
					</ul>
				</div>
			</div>

            <!-- Kategori -->
            <?php
            include '../koneksi.php';

            $kategori = mysqli_query($conn,"SELECT * from kategori where id_kategori='$_GET[id_kategori]'");

            while($k = mysqli_fetch_array($kategori)){
                $id_kategori = $k["id_kategori"];
                $nama_kategori = $k["nama_kategori"];
            }
            ?>

            <form action="proses_edit_kategori.php?id_kategori=<?php echo $id_kategori ?>" method="post" enctype="multipart/form-data" style="box-shadow: 0 0 7px gray; padding: 20px; border: 1px solid grey; border-radius: 10px">
                <h3 style="padding-top:10px; padding-bottom:15px"><center>Edit Kategori</center></h3>
                
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" value="<?php echo $nama_kategori ?>">
                    
                <input class="btn btn-primary" type="submit" name="submit" value="Simpan" style="margin-top:20px; margin-left:380px" onclick="return confirm('Simpan perubahan data?')">
                <button class="btn btn-secondary" style="margin-top:20px; margin-left:3px" onclick="window.location.href='kategori.php'">Cancel</button>
            </form>
        </main>
	</section>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>