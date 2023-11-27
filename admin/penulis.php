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
							<a id="active" href="#" class="nav-link">Penulis</a>
						</li>
					</ul>
				</div>
			</div>

            <!-- Penulis -->
            <div class="container" style="margin-top:30px">
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        include '../koneksi.php';
                        $query = mysqli_query($conn, "SELECT * FROM penulis ORDER BY id_penulis ASC");
                        ?>

                        <a class="btn btn-primary" style="margin-bottom:10px" href="tambah_penulis.php"> Tambah Penulis </a>

                        <table id="data-penulis" class="table table-striped table-bordered">
                            <thead>
                                <tr style="text-align:center">
                                    <th style="width:50px">No</th>
                                    <th>Nama Penulis</th>
                                    <th>Email</th>
                                    <th>Foto Profil</th>
                                    <th style="width:135px">Aksi</th>
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
                                    <td><?php echo $data["nama_penulis"] ?></td>
                                    <td><?php echo $data["email_penulis"] ?></td>
                                    <td> <img src="<?php echo $data["foto_profil"] ?>" width="100px"> </td>
                                    <td> <a href="edit_penulis.php?id_penulis=<?php echo $data["id_penulis"] ?>" class="btn btn-warning" style="padding:2px 12px;"> Edit </a>
                                    <a href="proses_hapus.php?penulis=<?php echo $data["id_penulis"] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger" style="padding:2px"> Delete </a> </td>
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
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>