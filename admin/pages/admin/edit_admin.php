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
            $ambil = $koneksi->query("SELECT * FROM tb_admin WHERE admin_id = $id ")->fetch_assoc();

          ?>


                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" value="<?php echo $ambil['admin_nama'] ?>" name="nama" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" value="<?php echo $ambil['admin_username'] ?>" name="username" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" value="<?php echo $ambil['admin_email'] ?>" name="email" id="" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" value="<?php echo md5($ambil['admin_username']) ?>"  class="form-control" id="">
                  </div>
                  <div class="form-group">
                    <img src="assets/img/admin/<?php echo $ambil['admin_foto'] ?>" name="fotolama" width="100px" alt=""><br>
                    <input name="fotolama" value="<?php echo $ambil['admin_foto'] ?>" for="">
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
                    <a href="?page=pages/admin/view_admin" class="btn btn-danger" >Batal</a>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan Perubahan</button>
                  </div>
                </form>

                <?php 

                  if (isset($_POST['simpan'])) {

                    $nama = $_POST['nama'];
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);

                    $fotolama = $_POST['fotolama'];

                    $namafoto = $_FILES['foto']['name'];
                    $lokasifoto = $_FILES['foto']['tmp_name'];
                    $size = $_FILES['foto']['size'];

                    if ($size > 5000000) {
                      echo "<script>
                        alert('Ukuran Foto Terlalu Besar')
                        window.location = '?page=pages/admin/edit_admin&idedit=".$id." '
                      </script>";
                    } else {
                      $foto = time().'_'.$namafoto;
                      move_uploaded_file($lokasifoto, 'assets/img/admin/'.$foto);
                    }

                    if (!empty($lokasifoto)) {
                      unlink("assets/img/admin/".$fotolama);
                      $update = $koneksi->query(" UPDATE tb_admin SET admin_nama = '$nama', admin_username = '$username', admin_email = '$email', admin_password = '$password', admin_foto = '$foto' WHERE admin_id = '$id'  ");
                    } else {
                      $update = $koneksi->query(" UPDATE tb_admin SET admin_nama = '$nama', admin_username = '$username', admin_email = '$email', admin_password = '$password' WHERE admin_id = '$id'  ");
                    }

                    

                    if ($update == TRUE) {
                      echo "<script>
                        alert('Data Berhasil Diubah')
                        window.location = '?page=pages/admin/view_admin'
                      </script>";
                    } else {
                      echo "<script>
                        alert('Data Gagal Diubah')
                        window.location =  '?page=pages/admin/edit_admin&idedit=".$id."'
                      </script>";
                    }


                  }

                ?>

        
      </div><!-- END CARD-BODY -->

    </div><!-- END CARD -->

  </div><!-- END CONTAINER -->



  </div>
  <!-- /.content-wrapper -->