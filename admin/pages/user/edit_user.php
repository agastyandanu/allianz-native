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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
            $ambil = $koneksi->query("SELECT * FROM tb_user WHERE user_id = $id ")->fetch_assoc();

          ?>


                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" value="<?php echo $ambil['user_nama'] ?>" name="nama" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" value="<?php echo $ambil['user_username'] ?>" name="username" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" value="<?php echo $ambil['user_email'] ?>" name="email" id="" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="">No. Telp</label>
                    <input type="text" class="form-control" value="<?php echo $ambil['user_notelp'] ?>" name="notelp" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $ambil['user_alamat'] ?>" name="alamat" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" value="<?php echo $ambil['user_password'] ?>" class="form-control" id="">
                  </div>
                  <div class="form-group">
                    <img src="assets/img/user/<?php echo $ambil['user_foto'] ?>" name="fotolama" width="100px" alt=""><br>
                    <input name="fotolama" value="<?php echo $ambil['user_foto'] ?>" for="">
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
                    <a href="?page=pages/user/view_user" class="btn btn-danger" >Batal</a>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan Perubahan</button>
                  </div>
                </form>

                <?php 

                  if (isset($_POST['simpan'])) {

                    $nama = $_POST['nama'];
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $notelp = $_POST['notelp'];
                    $alamat = $_POST['alamat'];
                    $password = md5($_POST['password']);

                    $fotolama = $_POST['fotolama'];

                    $namafoto = $_FILES['foto']['name'];
                    $lokasifoto = $_FILES['foto']['tmp_name'];
                    $size = $_FILES['foto']['size'];

                    if ($size > 5000000) {
                      echo "<script>
                        alert('Ukuran Foto Terlalu Besar')
                        window.location = '?page=pages/user/edit_user&idedit=".$id." '
                      </script>";
                    } else {
                      $foto = time().'_'.$namafoto;
                      move_uploaded_file($lokasifoto, 'assets/img/user/'.$foto);
                    }

                    if (!empty($lokasifoto)) {
                      unlink("assets/img/user/".$fotolama);
                      $update = $koneksi->query(" UPDATE tb_user SET user_nama = '$nama', user_username = '$username', user_email = '$email', user_notelp = '$notelp', user_alamat = '$alamat', user_password = '$password', user_foto = '$foto' WHERE user_id = '$id'  ");
                    } else {
                      $update = $koneksi->query(" UPDATE tb_user SET user_nama = '$nama', user_username = '$username', user_email = '$email', user_notelp = '$notelp', user_alamat = '$alamat', user_password = '$password' WHERE user_id = '$id'  ");
                    }

                    

                    if ($update == TRUE) {
                      echo "<script>
                        alert('Data Berhasil Diubah')
                        window.location = '?page=pages/user/view_user'
                      </script>";
                    } else {
                      echo "<script>
                        alert('Data Gagal Diubah')
                        window.location =  '?page=pages/user/edit_user&idedit=".$id."'
                      </script>";
                    }


                  }

                ?>

        
      </div><!-- END CARD-BODY -->

    </div><!-- END CARD -->

  </div><!-- END CONTAINER -->



  </div>
  <!-- /.content-wrapper -->