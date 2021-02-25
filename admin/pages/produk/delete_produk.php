<?php 

	$id = $_GET['iddelete'];

// HAPUS GAMBAR
	$hapusgambar = $koneksi->query("SELECT produk_foto FROM tb_produk WHERE produk_id = '$id' ")->fetch_assoc();
	$foto = $hapusgambar['produk_foto'];
	unlink("assets/img/produk/".$foto);


// HAPUS DATA
	$hapus = $koneksi->query("DELETE FROM tb_produk WHERE produk_id = '$id' ");

	if ($hapus == TRUE) {
		echo "<script>
            alert('Data Berhasil Terhapus')
        	window.location = '?page=pages/produk/view_produk'
       	</script>";
	} else {
		echo "<script>
            alert('Data Gagal Terhapus')
        	window.location = '?page=pages/produk/view_produk'
       	</script>";
	}

?>