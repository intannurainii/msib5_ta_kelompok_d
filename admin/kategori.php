<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
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
					<i class='bx bxs-home' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="berita.php" class="nav-link">
					<i class='bx bxs-news'></i>
					<span class="text">Berita</span>
				</a>
			</li>
			<li id="active">
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
							<a id="active" href="#" class="nav-link">Kategori</a>
						</li>
					</ul>
				</div>
			</div>

            <!-- Kategori -->
            <div class="container" style="margin-top:30px">
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        include '../koneksi.php';
                        $query = mysqli_query($conn, "SELECT * FROM kategori ORDER BY id_kategori ASC");
                        ?>

                        <a class="btn btn-primary" style="margin-bottom:10px" href="tambah_kategori.php"> Tambah Kategori </a>

                        <table id="data-kategori" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th style="width:430px">Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                if(mysqli_num_rows($query)>0){ 
                                $no = 1;
                                while($data = mysqli_fetch_array($query)){
                                ?>
                                
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data["nama_kategori"] ?></td>
                                    <td> <a href="edit_kategori.php?id_kategori=<?php echo $data["id_kategori"] ?>" class="btn btn-warning" style="padding:2px 12px;"> Edit </a>
                                    <a href="proses_hapus.php?kategori=<?php echo $data["id_kategori"] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger" style="padding:2px"> Delete </a> </td>
                                </tr>

                                <?php  $no++; } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
	</section>

	<script>
       $(document).ready(function () {
            $('#data-kategori').DataTable();
        });
    </script>

</body>
<script src="script.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>