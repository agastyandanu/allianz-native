<?php 

  include 'models/koneksi.php';

  session_start();

  if (empty($_SESSION['admin'])) {

    echo "<script>
      alert('Silahkan Login Terlebih Dahulu')
      window.location = 'login.php'
    </script>";
  }

?>


<!DOCTYPE html>
<html>

<!-- HEAD -->
<head>
    <?php include 'components/head.php'; ?>
</head>
<!-- END HEAD -->

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<!-- NAVBAR -->
  <?php include 'components/topbar.php'; ?>
<!-- END NAVBAR -->


<!-- SIDEBAR -->
  <?php include 'components/sidebar.php'; ?>
<!-- END SIDEBAR -->


<!-- HOME/BODY -->
  <?php include 'content.php'; ?>
<!-- END HOME/BODY -->


<!-- FOOTER -->
  <?php include 'components/footer.php'; ?>
<!-- END FOOTER -->





<!-- SCRIPT -->
  <?php include 'components/script.php'; ?>
<!-- END SCRIPT -->


</body>
</html>
