<?php 

  $id = $_GET['idkategori'];
  $ambil = $koneksi->query("SELECT * FROM tb_kategori WHERE kategori_id = '$id' ")->fetch_assoc();

?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="assets/img/banner1.jpeg?>" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

   <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs mt-0">
      <div class="container">

        <ol>
          <li><a href="?page=home">Home</a></li>
          <li><a href="?page=home&#produk">Produk</a></li>
          <li><a href="?page=pages/kategori&idkategori=<?php echo $ambil['kategori_id']; ?>"><?php echo $ambil['kategori_nama']; ?></a></li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

<?php 

  $id = $_GET['idkategori'];
  $ambil = $koneksi->query("SELECT * FROM tb_produk WHERE kategori_id = '$id' ");
  while ($pecah = $ambil->fetch_assoc()) {

?>

<!-- <section class="produk text-center shadow">
  
  <div class="row">
    <div class="col">
      <img src="admin/assets/img/produk/<?php echo $pecah['produk_foto']; ?>" width="450px" style="background-attachment:fixed; " alt="">
      <h3 class="mt-4"><a href="?page=pages/produkdetail&iddetail=<?php echo $pecah['produk_id']; ?>"><?php echo $pecah['produk_nama'] ?></a></h3>
      <p><?php echo $pecah['produk_tagline'] ?></p>
    </div>
  </div>

</section> -->

<!-- Product List -->
<div class="container">
  <a href="?page=pages/produkdetail&iddetail=<?php echo $pecah['produk_id']; ?>">
  <div class="media m-3">
    <img src="admin/assets/img/produk/<?php echo $pecah['produk_foto']; ?>" class="align-self-center ml-3 col-4" alt="...">
    <div class="media-body">
      <h4 class="mt-0 mb-1"><?php echo $pecah['produk_nama']?></h4>
      <p class="text-dark"><?php echo $pecah['produk_tagline'] ?></p>
    </div>
  </div>
  </a>
</div>
<!-- End Product List -->


<?php } ?>