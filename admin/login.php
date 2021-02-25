<?php include 'models/koneksi.php';
session_start();

    if (!empty($_SESSION['admin'])) {
        echo "<script>
            window.location = 'index.php'
        </script>";
    }

?>


<!DOCTYPE html>
<html>

<head>
    <?php include 'components/head.php' ?>
</head>

<body class="hold-transition login-page">


    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>ALLIANZ</b> KOTA PADANG</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login Administrator</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                    </div>
                </form>



                <?php if (isset($_POST['login'])) {
                    $username           = $_POST['username'];
                    $password           = md5($_POST['pass']);


                    $cek =  $koneksi->query("SELECT * FROM tb_admin WHERE admin_username = '$username' AND admin_password = '$password'");

                    $pecah = $cek->fetch_assoc();

                

                    $validasi = $cek->num_rows;

                    if ($validasi >= 1) {

                        $_SESSION['admin'] = $pecah;

                        echo   " <script>
                                alert('Anda Berhasil Login');
                                window.location='?page=index';
                            </script>";
                    } else {
                        echo   " <script>
                        alert('Password Salah, Silahkan Login Lagi');
                        window.location='?page=login';
                    </script>";
                    }
                } ?>





            </div>

        </div>
    </div>


    <?php include 'components/script.php' ?>
</body>

</html>