<?php 

  $id = $_GET['idedit'];
  $edit = $koneksi->query("SELECT * FROM tb_artikel WHERE artikel_id = '$id' ")->fetch_assoc();

?>

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mb-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">artikel</h1>
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
                    <label for="">Judul</label>
                    <input type="text" value="<?php echo $edit['artikel_judul'] ?>" class="form-control" name="judul" id="">
                  </div>

                  </div>
                  <div class="form-group">
                    <label for="">Isi</label>
                    <textarea type="textarea" value="" rows="5" class="form-control" name="isi" id=""><?php echo $edit['artikel_isi'] ?></textarea>
                  </div>

                  <script>
                    CKEDITOR.replace('isi');
                  </script>


                  <div class="form-group">
                    <img src="assets/img/artikel/<?php echo $edit['artikel_foto'] ?>" width="150px" alt="" class="mb-3" ><br>
                    <input type="text" name="fotolama" value="<?php echo $edit['artikel_foto']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" class="form-control" id="">
                  </div>

                  <div class="form-group">
                    <label for="">Penulis</label>
                    <input type="text" value="<?php echo $edit['artikel_penulis'] ?>" class="form-control" name="penulis" id="">
                  </div>


                  <div class="form-group">
                    <input type="hidden" value="<?php echo $edit['artikel_tanggal'] ?>" class="form-control" name="tanggal" id="">
                  </div>


                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="">Data Sudah Benar?</label>
                  </div>

                  <div class="modal-footer">
                    <button type="submit" href="?page=pages/artikel/view_artikel" hr class="btn btn-danger">Batal</button>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                  </div>
                </form>

                <?php 

                  if (isset($_POST['simpan'])) {

                    $judul = $_POST['judul'];
                    $isi = $_POST['isi'];
                    $penulis = $_POST['penulis'];
                    $tanggal = $_POST['tanggal'];

                    $namafoto = $_FILES['foto']['name'];
                    $lokasifoto = $_FILES['foto']['tmp_name'];
                    $size = $_FILES['foto']['size'];

                    if ($size > 5000000) {
                      echo "<script>
                        alert('Ukuran Foto Terlalu Besar')
                        window.location = '?page=pages/artikel/view_artikel'
                      </script>";
                    } else {
                      $foto = time().'_'.$namafoto;
                      move_uploaded_file($lokasifoto, 'assets/img/artikel/'.$foto);
                    }

                    if (!empty($lokasifoto)) {
                      unlink("assets/img/artikel/".$fotolama);
                      $update = $koneksi->query(" UPDATE tb_artikel SET artikel_judul = '$judul', artikel_isi = '$isi', artikel_foto = '$foto', artikel_penulis = '$penulis', artikel_tanggal = '$tanggal' WHERE artikel_id = '$id' ");
                    } else {
                      $update = $koneksi->query(" UPDATE tb_artikel SET artikel_judul = '$judul', artikel_isi = '$isi', artikel_penulis = '$penulis', artikel_tanggal = '$tanggal' WHERE artikel_id = '$id' ");
                    }

                    

                    if ($update == TRUE) {
                      echo "<script>
                        alert('Data Berhasil Diperbarui')
                        window.location = '?page=pages/artikel/view_artikel'
                      </script>";
                    } else {
                      echo "<script>
                        alert('Data Gagal Diperbarui')
                        window.location =  '?page=pages/artikel/view_artikel'
                      </script>";
                    }


                  }

                ?>

        
      </div><!-- END CARD-BODY -->

    </div><!-- END CARD -->

  </div><!-- END CONTAINER -->



  </div>
  <!-- /.content-wrapper -->