  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata">
          Tambah Data
        </button>

        <table class="table table-bordered mt-3">

          <thead>
            <tr class="text-center bg-secondary">
              
              <th>Id</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Foto</th>
              <th>Penulis</th>
              <th>Tanggal</th>
              <th>More</th>

            </tr>
          </thead>


            <?php 

              $ambil = $koneksi->query("SELECT * FROM tb_artikel ORDER BY artikel_tanggal DESC");
              while ($pecah = $ambil->fetch_assoc()) {

            ?>
          <tbody>
            <tr>
              
              <td class="text-center"><?php echo $pecah['artikel_id']; ?></td>
              <td><?php echo $pecah['artikel_judul']; ?></td>
              <td><?php echo substr($pecah['artikel_isi'], 0, 300); ?></td>
              <td class="text-center"><img src="assets/img/artikel/<?php echo $pecah['artikel_foto']; ?>" style="max-width: 100px; max-height: 50px;" alt=""></td>
              <td><?php echo $pecah['artikel_penulis']; ?></td>
              <td><?php echo $pecah['artikel_tanggal']; ?></td>
              <td>
                <a href="?page=pages/artikel/edit_artikel&idedit=<?php echo $pecah['artikel_id']; ?>" class="btn btn-primary">Edit</a>
                <a href="?page=pages/artikel/delete_artikel&iddelete=<?php echo $pecah['artikel_id']; ?>" class="btn btn-danger">Hapus</a>
              </td>

            </tr>
          </tbody>

          <?php } ?>
          
        </table>

        <!-- MODAL -->
        <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" id="">
                  </div>

                  <div class="form-group">
                    <label for="">Isi</label>
                    <textarea type="textarea" rows="5" class="form-control" name="isi" id="isi"></textarea>
                  </div>

                  <script>
                    CKEDITOR.replace('isi');
                  </script>

                  <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" class="form-control" id="">
                  </div>

                  <div class="form-group">
                    <label for="">Penulis</label>
                    <input type="text" class="form-control" name="penulis" id="">
                  </div>

                  <div class="form-group">
                    <label for="">Tanggal Terbit</label>
                    <input type="date" class="form-control" name="tanggal" id="">
                  </div>

                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="">Data Sudah Benar?</label>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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
                        window.location = '?page=pages/produk/view_artikel'
                      </script>";
                    } else {
                      $foto = time().'_'.$namafoto;
                      move_uploaded_file($lokasifoto, 'assets/img/artikel/'.$foto);
                    }

                    $simpan = $koneksi->query("INSERT INTO tb_artikel (artikel_judul, artikel_isi, artikel_foto, artikel_penulis, artikel_tanggal) VALUES ('$judul', '$isi', '$foto', '$penulis', '$tanggal') ");

                    if ($simpan == TRUE) {
                      echo "<script>
                        alert('Data Berhasil Tersimpan')
                        window.location = '?page=pages/artikel/view_artikel'
                      </script>";
                    } else {
                      echo "<script>
                        alert('Data Gagal Tersimpan')
                        window.location =  '?page=pages/artikel/view_artikel'
                      </script>";
                    }


                  }

                ?>


              </div> <!-- /MODAL BODY -->
            </div>
          </div>
        </div> <!-- /MODAL -->
        
      </div><!-- END CARD-BODY -->

    </div><!-- END CARD -->

  </div><!-- END CONTAINER -->



  </div>
  <!-- /.content-wrapper -->