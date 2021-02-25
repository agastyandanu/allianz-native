<?php 

	$id = $_GET['iddelete'];

// HAPUS GAMBAR
	$hapusgambar = $koneksi->query("SELECT artikel_foto FROM tb_artikel WHERE artikel_id = '$id' ")->fetch_assoc();
	$foto = $hapusgambar['artikel_foto'];
	unlink("assets/img/artikel/".$foto);


// HAPUS DATA
	$hapus = $koneksi->query("DELETE FROM tb_artikel WHERE artikel_id = '$id' ");

	if ($hapus == TRUE) {
		echo "<script>
            alert('Data Berhasil Terhapus')
        	window.location = '?page=pages/artikel/view_artikel'
       	</script>";
	} else {
		echo "<script>
            alert('Data Gagal Terhapus')
        	window.location = '?page=pages/artikel/view_artikel'
       	</script>";
	}

?>