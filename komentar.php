<?php
	// Jika tombol submit di klik
	if (isset($_POST['btnkomen'])) {
		// Ambil data nama dari input yang ber-name 'nama'
		$nama = $_POST['nama'];
		// Ambil data isi dari yang ber-name 'isi'
		$isi  = $_POST['isi'];
		

		// Simpan data ke database
		$sql  = "INSERT INTO komen VALUES ('', '$id', '$nama', '$isi')";
		$que  = mysql_query($sql);
		// Tampilkan pemberitahuan
		echo "Sukses";
		// Refresh halaman dengan durasi 1 detik
		echo "<meta http-equiv='refresh' content='1;url=detail.php?detail=".$id."'>";
	}
?>