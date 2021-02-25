<?php 

	$id = $_GET['iddelete'];

	$ambil = $koneksi->query("SELECT * FROM tb_user WHERE user_id = $id ")->fetch_assoc();
		$foto = $ambil['user_foto'];
		unlink("assets/img/user/".$foto);

		
	$hapus = $koneksi->query("DELETE FROM tb_user WHERE user_id = '$id' ");

	if ($hapus == TRUE) {
		echo "<script>
            alert('Data Berhasil Terhapus')
        	window.location = '?page=pages/user/view_user'
       	</script>";
	} else {
		echo "<script>
            alert('Data Gagal Terhapus')
        	window.location = '?page=pages/user/view_user'
       	</script>";
	}

?>