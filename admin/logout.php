<?php 

	include 'models/koneksi.php';

	session_start();
	session_destroy();

	echo "<script>

		alert('Anda Berhasil Logout')
		window.location = '?page=login'

	</script>";


?>