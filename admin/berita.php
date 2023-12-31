<!DOCTYPE html>
<html lang="en">
<head>
<title>OneNews | Berita Admin</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/favicon.png"/>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css"/>
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
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a id="active" href="#" class="nav-link">Berita</a>
						</li>
					</ul>
				</div>
			</div>

            <!-- berita -->
            <div class="container" style="margin-top:30px">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        include '../koneksi.php';
                        $query = mysqli_query($conn, "SELECT berita.*, kategori.*, penulis.*, COUNT(like_berita.id_berita) AS jumlah_like FROM berita 
                        LEFT JOIN kategori on berita.id_kategori = kategori.id_kategori 
                        LEFT JOIN penulis on penulis.id_penulis = berita.id_penulis
                        LEFT JOIN like_berita ON berita.id_berita = like_berita.id_berita
                        GROUP BY berita.id_berita 
                        ORDER BY jumlah_like DESC;");
                        ?>

                        <a class="btn btn-primary" style="margin-bottom:10px" href="tambah_berita.php"> Tambah Berita </a>

                        <table id="data-berita" class="table table-striped table-bordered border-top">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Berita</th>
                                    <th>Gambar</th>
                                    <th>Kategori</th>
                                    <th>Content</th>
                                    <th>Tanggal Publish</th>
                                    <th>Penulis</th>
                                    <th>Like</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                if(mysqli_num_rows($query)>0){ 
                                $no = 1;
                                while($data = mysqli_fetch_array($query)){
									$judul_berita = $data["judul_berita"];
                                ?>
                                
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data["judul_berita"] ?></td>
                                    <td><img src="../img/berita/<?php echo $data["gambar_berita"] ?>" width="100px"></td>
                                    <td><?php echo $data["nama_kategori"] ?></td>
                                    <td id="isi_berita_admin"><?php echo $data["isi_berita"] ?></td>
                                    <td><?php echo $data["tanggal_publish"] ?></td>
                                    <td><?php echo $data["nama_penulis"] ?></td>
                                    <td><?php echo $data["jumlah_like"] ?></td>
                                    <td> <a href="edit_berita.php?id_berita=<?php echo $data["id_berita"] ?>" class="btn btn-warning" style="padding:2px 12px; margin-bottom:10px"> Edit </a>
                                    <a href="proses_hapus.php?berita=<?php echo $data["id_berita"] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data <?php echo $judul_berita ?>?')" class="btn btn-danger" style="padding:2px"> Delete </a></td>
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
            $('#data-berita').DataTable();
        });
    </script>

</body>
<script src="script.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>