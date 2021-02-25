<?php 

	$id = $_GET['iddelete'];

	$hapus = $koneksi->query("DELETE FROM tb_admin WHERE admin_id = '$id' ");

	if ($hapus == TRUE) {
		echo "<script>
            alert('Data Berhasil Terhapus')
        	window.location = '?page=pages/admin/view_admin'
       	</script>";
	} else {
		echo "<script>
            alert('Data Gagal Terhapus')
        	window.location = '?page=pages/admin/view_admin'
       	</script>";
	}

?>