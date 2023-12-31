<!DOCTYPE html>
<html lang="en">

<head>
<title>OneNews | Komentar Admin</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../img/favicon.png"/>
	<title>Admin</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<!-- Sidebar -->
	<?php $page = 'komentar'; include "sidebar.php" ?>

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
							<a id="active" href="#" class="nav-link">Komentar</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- Penulis -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
						include '../koneksi.php';
						$query = mysqli_query($conn, "SELECT * FROM komen ORDER BY id_komen ASC");
						?>

						<table id="data-komen" class="table table-striped table-bordered border-top">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
                                    <th>Komentar</th>
									<th>Tanggal Komen</th>
									<th>Aksi</th>
								</tr>
							</thead>

							<tbody>
								<?php
								if (mysqli_num_rows($query) > 0) {
									$no = 1;
									while ($data = mysqli_fetch_array($query)) {
								?>

										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $data["nama"] ?></td>
                                            <td><?php echo $data["isi_komen"] ?></td>
                                            <td><?php echo $data["tgl"] ?></td>
											<td><a href="proses_hapus.php?komen=<?php echo $data["id_komen"] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger" style="padding:2px"> Delete </a></td>
										</tr>

									<?php $no++;
									} ?>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</main>
	</section>

	<script>
		$(document).ready(function() {
			$('#data-komen').DataTable();
		});
	</script>

</body>
<script src="script.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>