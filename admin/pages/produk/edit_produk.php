<?php 

  $id = $_GET['idedit'];
  $edit = $koneksi->query("SELECT * FROM tb_produk a JOIN tb_kategori b ON a.kategori_id = b.kategori_id WHERE produk_id = '$id' ")->fetch_assoc();

?>

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mb-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<!-- CONTAINER -->
  <div class="container">

    <div class="card">

      <div class="card-header">
        
      </div><!-- END CARD HEADER -->
      <div class="card-body">


                <form action="" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                      <label for="kategori">Kategori Produk</label>
                      <select name="kategori" id="kat" class="form-control">
                              
                        <option value="">-- Silahkan Pilih --</option>

                        <?php 
                          $ambil = $koneksi->query("SELECT * FROM tb_kategori");
                            while ($pecah = $ambil->fetch_assoc()) 
                            { 
                        ?>

                            <option value="<?php echo $pecah['kategori_id']; ?>"><?php echo $pecah['kategori_nama']; ?></option>

                        <?php } ?>

                        

                      </select>
                  </div>

                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" value="<?php echo $edit['produk_nama'] ?>" class="form-control" name="nama" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Tagline</label>
                    <input type="text" value="<?php echo $edit['produk_tagline'] ?>" class="form-control" name="tagline" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Isi</label>
                    <textarea type="textarea" value="" rows="5" class="form-control" name="isi" id=""><?php echo $edit['produk_isi'] ?></textarea>
                  </div>

                  <script>
                    CKEDITOR.replace('isi');
                  </script>

                  <div class="form-group">
                    <label for="">Keunggulan</label>
                    <textarea type="textarea" value="" rows="5" class="form-control" name="keunggulan" id=""><?php echo $edit['produk_keunggulan'] ?></textarea>
                  </div>

                  <script>
                    CKEDITOR.replace('keunggulan');
                  </script>


                  <div class="form-group">
                    <img src="assets/img/produk/<?php echo $edit['produk_foto'] ?>" width="150px" alt="" class="mb-3" ><br>
                    <input type="text" name="fotolama" value="<?php echo $edit['produk_foto']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" class="form-control" id="">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="">Data Sudah Benar?</label>
                  </div>

                  <div class="modal-footer">
                    <button type="submit" href="?page=pages/produk/view_produk" hr class="btn btn-danger">Batal</button>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                  </div>
                </form>

                <?php 

                  if (isset($_POST['simpan'])) {

                    $nama = $_POST['nama'];
                    $kategori = $_POST['kategori'];
                    $tagline = $_POST['tagline'];
                    $isi = $_POST['isi'];
                    $keunggulan = $_POST['keunggulan'];

                    $namafoto = $_FILES['foto']['name'];
                    $lokasifoto = $_FILES['foto']['tmp_name'];
                    $size = $_FILES['foto']['size'];

                    if ($size > 5000000) {
                      echo "<script>
                        alert('Ukuran Foto Terlalu Besar')
                        window.location = '?page=pages/produk/view_produk'
                      </script>";
                    } else {
                      $foto = time().'_'.$namafoto;
                      move_uploaded_file($lokasifoto, 'assets/img/produk/'.$foto);
                    }

                    if (!empty($lokasifoto)) {
                      unlink("assets/img/produk/".$fotolama);
                      $update = $koneksi->query(" UPDATE tb_produk SET produk_nama = '$nama', kategori_id = '$kategori', produk_tagline = '$tagline', produk_isi= '$isi', produk_keunggulan = '$keunggulan', produk_foto = '$foto' WHERE produk_id = '$id' ");
                    } else {
                      $update = $koneksi->query(" UPDATE tb_produk SET produk_nama = '$nama', kategori_id = '$kategori', produk_tagline = '$tagline', produk_isi= '$isi', produk_keunggulan = '$keunggulan' WHERE produk_id = '$id' ");
                    }

                    

                    if ($update == TRUE) {
                      echo "<script>
                        alert('Data Berhasil Diperbarui')
                        window.location = '?page=pages/produk/view_produk'
                      </script>";
                    } else {
                      echo "<script>
                        alert('Data Gagal Diperbarui')
                        window.location =  '?page=pages/produk/view_produk'
                      </script>";
                    }


                  }

                ?>

        
      </div><!-- END CARD-BODY -->

    </div><!-- END CARD -->

  </div><!-- END CONTAINER -->



  </div>
  <!-- /.content-wrapper -->