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
              <th>Kategori</th>
              <th>Nama</th>
              <th>Tagline</th>
              <th>Isi</th>
              <th>Keunggulan</th>
              <th>Foto</th>
              <th>More</th>

            </tr>
          </thead>


            <?php 

              $ambil = $koneksi->query("SELECT * FROM tb_produk a JOIN tb_kategori b ON a.kategori_id = b.kategori_id ");
              while ($pecah = $ambil->fetch_assoc()) {

            ?>
          <tbody>
            <tr>
              
              <td class="text-center"><?php echo $pecah['produk_id']; ?></td>
              <td><?php echo $pecah['kategori_nama']; ?></td>
              <td><?php echo $pecah['produk_nama']; ?></td>
              <td><?php echo $pecah['produk_tagline']; ?></td>
              <td><?php echo substr($pecah['produk_isi'], 0, 100); ?></td>
              <td><?php echo substr($pecah['produk_keunggulan'], 0, 100); ?></td>
              <td class="text-center"><img src="assets/img/produk/<?php echo $pecah['produk_foto']; ?>" style="max-width: 100px; max-height: 50px;" alt=""></td>
              <td class="text-center">
                <a href="?page=pages/produk/edit_produk&idedit=<?php echo $pecah['produk_id']; ?>" class="btn btn-primary">Edit</a>
                <a href="?page=pages/produk/delete_produk&iddelete=<?php echo $pecah['produk_id']; ?>" class="btn btn-danger">Hapus</a>
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
                      <label for="kategori">Kategori Produk</label>
                      <select name="kategori" class="form-control">
                              
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
                    <input type="text" class="form-control" name="nama" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Tagline</label>
                    <input type="text" class="form-control" name="tagline" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Isi</label>
                    <textarea type="textarea" rows="5" class="form-control" name="isi" id="isi"></textarea>
                  </div>

                  <script>
                    CKEDITOR.replace('isi');
                  </script>

                  <div class="form-group">
                    <label for="">Keunggulan</label>
                    <textarea type="textarea" rows="5" class="form-control" name="keunggulan" id=""></textarea>
                  </div>

                  <script>
                    CKEDITOR.replace('keunggulan');
                  </script>

                  <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" class="form-control" id="">
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

                    $simpan = $koneksi->query("INSERT INTO tb_produk (produk_nama, kategori_id, produk_tagline, produk_isi, produk_keunggulan, produk_foto) VALUES ('$nama', '$kategori', '$tagline', '$isi', '$keunggulan', '$foto') ");

                    if ($simpan == TRUE) {
                      echo "<script>
                        alert('Data Berhasil Tersimpan')
                        window.location = '?page=pages/produk/view_produk'
                      </script>";
                    } else {
                      echo "<script>
                        alert('Data Gagal Tersimpan')
                        window.location =  '?page=pages/produk/view_produk'
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