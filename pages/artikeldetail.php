<?php 

  $id = $_GET['iddetail'];
  $ambil = $koneksi->query("SELECT * FROM tb_artikel WHERE artikel_id = '$id' ")->fetch_assoc();

?>

<div class="jumbotron jumbotron-fluid mb-0" style="height: 350px ; background-image: url(admin/assets/img/artikel/<?php echo $ambil['artikel_foto']; ?>); background-attachment: fixed; ">
  <div class="container text-center mt-5">
    <h1 class="display-4"><?php echo $ambil['artikel_nama'] ?></h1>
    <p class="lead"><?php echo $ambil['artikel_tagline'] ?></p>
  </div>
</div>

   <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs mt-0">
      <div class="container">

        <ol>
          <li><a href="?page=home">Home</a></li>
          <li><a href="?page=home&#artikel">artikel</a></li>
          <li><a href="?page=pages/artikel&idartikel=<?php echo $ambil['artikel_id']; ?>"><b><?php echo $ambil['artikel_judul']; ?></b></a></li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->


    <div class="container pt-3">

      <div class="row">

          <div class="container mt-1">
            <i class="icofont-user mr-2"></i>Penulis : <?php echo $ambil['artikel_penulis'] ?>
            <i class="icofont-wall-clock mr-2 ml-4"></i><time datetime="2020-01-01"><?php echo $ambil['artikel_tanggal'] ?></time>
            <i class="icofont-comment mr-2 ml-4"></i> 12 Comments
            </div>

            <section id="portfolio-details" class="portfolio-details">
              <div class="container">

                <div class="portfolio-description">
                 <h1 class="text-center"><?php echo $ambil['artikel_judul'] ?></h1>
                </div>

                <div class="portfolio-description">
                 <p class="font-weight-light text-center mb-4"><?php echo $ambil['artikel_isi']?></p>
                </div>

              </div>
            </section>


      </div><!-- row -->
      
    </div><!-- container -->
      







            