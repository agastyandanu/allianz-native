  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mb-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Data Administrator</h1>
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


          <?php 

            $id = $_GET['idedit'];
            $ambil = $koneksi->query("SELECT * FROM tb_kategori WHERE kategori_id = $id ")->fetch_assoc();

          ?>


                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" value="<?php echo $ambil['kategori_nama'] ?>" name="nama" id="">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="">Data Sudah Benar?</label>
                  </div>

                  <div class="modal-footer">
                    <a href="?page=pages/kategori/view_kategori" class="btn btn-danger" >Batal</a>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan Perubahan</button>
                  </div>
                </form>

                <?php 

                  if (isset($_POST['simpan'])) {

                    $nama = $_POST['nama'];

                      $update = $koneksi->query(" UPDATE tb_kategori SET kategori_nama = '$nama' WHERE kategori_id = '$id'  ");
                    

                    if ($update == TRUE) {
                      echo "<script>
                        alert('Data Berhasil Diubah')
                        window.location = '?page=pages/kategori/view_kategori'
                      </script>";
                    } else {
                      echo "<script>
                        alert('Data Gagal Diubah')
                        window.location =  '?page=pages/kategori/edit_kategori&idedit=".$id."'
                      </script>";
                    }


                  }

                ?>

        
      </div><!-- END CARD-BODY -->

    </div><!-- END CARD -->

  </div><!-- END CONTAINER -->



  </div>
  <!-- /.content-wrapper -->