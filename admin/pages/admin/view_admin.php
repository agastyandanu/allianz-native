  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Administrator</h1>
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
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
              <th>Foto</th>
              <th>More</th>

            </tr>
          </thead>


            <?php 

              $ambil = $koneksi->query("SELECT * FROM tb_admin");
              while ($pecah = $ambil->fetch_assoc()) {

            ?>
          <tbody>
            <tr>
              
              <td class="text-center"><?php echo $pecah['admin_id']; ?></td>
              <td><?php echo $pecah['admin_nama']; ?></td>
              <td><?php echo $pecah['admin_username']; ?></td>
              <td><?php echo $pecah['admin_email']; ?></td>
              <td><strong><?php echo md5($pecah['admin_password'])  ; ?></strong></td>
              <td class="text-center"><img src="assets/img/admin/<?php echo $pecah['admin_foto']; ?>" style="max-width: 100px; max-height: 50px;" alt=""></td>
              <td class="text-center">
                <a href="?page=pages/admin/edit_admin&idedit=<?php echo $pecah['admin_id']; ?>" class="btn btn-primary">Edit</a>
                <a href="?page=pages/admin/delete_admin&iddelete=<?php echo $pecah['admin_id']; ?>" class="btn btn-danger">Hapus</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                  </div>
                </form>

                <?php 

                  if (isset($_POST['simpan'])) {

                    $nama = $_POST['nama'];
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);

                    $namafoto = $_FILES['foto']['name'];
                    $lokasifoto = $_FILES['foto']['tmp_name'];
                    $size = $_FILES['foto']['size'];

                    if ($size > 5000000) {
                      echo "<script>
                        alert('Ukuran Foto Terlalu Besar')
                        window.location = '?page=pages/admin/view_admin'
                      </script>";
                    } else {
                      $foto = time().'_'.$namafoto;
                      move_uploaded_file($lokasifoto, 'assets/img/admin/'.$foto);
                    }

                    $simpan = $koneksi->query("INSERT INTO tb_admin (admin_nama, admin_username, admin_email, admin_password, admin_foto) VALUES ('$nama', '$username', '$email', '$password', '$foto') ");

                    if ($simpan == TRUE) {
                      echo "<script>
                        alert('Data Berhasil Tersimpan')
                        window.location = '?page=pages/admin/view_admin'
                      </script>";
                    } else {
                      echo "<script>
                        alert('Data Gagal Tersimpan')
                        window.location =  '?page=pages/admin/view_admin'
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