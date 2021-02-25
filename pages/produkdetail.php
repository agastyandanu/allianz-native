<?php 

  $id = $_GET['iddetail'];
  $ambil = $koneksi->query("SELECT * FROM tb_produk a JOIN tb_kategori b ON a.kategori_id = b.kategori_id WHERE produk_id = '$id' ")->fetch_assoc();

?>

<div class="jumbotron jumbotron-fluid mb-0" style="height: 350px ; background-image: url(admin/assets/img/produk/<?php echo $ambil['produk_foto']; ?>); background-attachment: fixed; ">
  <div class="container text-center mt-5">
    <h1 class="display-4"><?php echo $ambil['produk_nama'] ?></h1>
    <p class="lead"><?php echo $ambil['produk_tagline'] ?></p>
  </div>
</div>

   <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs mt-0">
      <div class="container">

        <ol>
          <li><a href="?page=home">Home</a></li>
          <li><a href="?page=home&#produk">Produk</a></li>
          <li><a href="?page=pages/kategori&idkategori=<?php echo $ambil['kategori_id']; ?>"><?php echo $ambil['kategori_nama']; ?></a></li>
          <li class="font-weight-bold"><?php echo $ambil['produk_nama'] ?></li>
        </ol>
        <h2><?php echo $ambil['kategori_nama'] ?></h2>

      </div>
    </section><!-- End Breadcrumbs -->



    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-description">
          <h2 class="text-center"><?php echo $ambil['produk_isi'] ?></h2>
        </div>


        <div class="portfolio-description">
          <h1 class="font-weight-light text-center mb-4">Keunggulan <?php echo $ambil['produk_nama']?></h1>
          <h2 class="font-weight-light text-darkblue"><?php echo $ambil['produk_keunggulan'] ?></h2>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->







            