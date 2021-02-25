<?php 
  include 'admin/models/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
    include 'components/head.php';
  ?>
</head>

<body>

<!-- NAVBAR -->
  <?php 
    include 'components/topbar.php';
  ?>
<!-- /NAVBAR -->

<!-- BODY/HOME -->
  <?php 
    include 'content.php';
  ?>
<!-- /BODY/HOME -->

<!-- FOOTER -->
  <?php 
    include 'components/footer.php';
  ?>
<!-- /FOOTER -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

<!-- SCRIPT -->
  <?php 
    include 'components/script.php';
  ?>
<!-- /SCRIPT -->

</body>

</html>