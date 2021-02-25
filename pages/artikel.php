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
          <li><a href="?page=pages/artikel">Artikel</a></li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

<?php 
  $ambil = $koneksi->query("SELECT * FROM tb_artikel ORDER BY artikel_id DESC");
  while ($pecah = $ambil->fetch_assoc()) {

?>


<!-- Product List -->
<div class="container">
  <a href="?page=pages/artikeldetail&iddetail=<?php echo $pecah['artikel_id']; ?>">
  <div class="media m-3">
    <img src="admin/assets/img/artikel/<?php echo $pecah['artikel_foto']; ?>" class="align-self-center ml-3 col-4" alt="...">
    <div class="media-body">
      <h3 class="mt-0 mb-1 text-darkblue"><?php echo $pecah['artikel_judul']?></h3>

      <i class="icofont-user mr-2"></i><?php echo $pecah['artikel_penulis'] ?>
      <i class="icofont-wall-clock mr-2 ml-4"></i><time datetime="2020-01-01"><?php echo $pecah['artikel_tanggal'] ?></time>
      <i class="icofont-comment mr-2 ml-4"></i> 12 Comments

      <p class="text-dark font-italic mt-2"><?php echo substr($pecah['artikel_isi'], 0, 150) ?> ...</p>
    </div>
  </div>
  </a>
</div>
<!-- End Product List -->


<?php } ?>