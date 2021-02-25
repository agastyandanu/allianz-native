  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="?page=home"><img src="assets/img/logo.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="?page=home&#home">Home</a></li>
          <li><a href="?page=home&#about">Tentang Kami</a></li>
          <li><a href="?page=home&#layanan">Layanan</a></li>
          <li><a href="?page=pages/artikel">Artikel</a></li>
          <!-- <li><a href="?page=home&#team">Team</a></li> -->

          <li class="drop-down"><a href="">Produk</a>
            <ul>
              <?php 
                    $ambil = $koneksi->query("SELECT * FROM tb_kategori");
                    while ($pecah = $ambil->fetch_assoc()) {
              ?>

                  <li><a href="?page=/pages/kategori&idkategori=<?php echo $pecah['kategori_id']; ?>"><?php echo $pecah['kategori_nama']; ?></a>
            
              <?php } ?>

                  </li>
        
            </ul>
          </li>
          <li><a href="?page/home&#contact">Hubungi Kami</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="?page=pages/klaim" class="get-started-btn scrollto">Klaim Asuransi</a>

    </div>
  </header><!-- End Header -->