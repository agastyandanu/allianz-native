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
          <li><a href="?page=pages/klaim">Klaim Asuransi</a></li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

<!-- Klaim -->
<section>
  <div class="container">

    <div class="header p-3 text-center">
      <h1>Klaim Asuransi Jiwa</h1>
      <p>Langkah awal dalam prosedur pengajuan klaim asuransi jiwa Allianz adalah peserta asuransi harus melapokan kerugian akibat kecelakaan atau kehilangan kepada agen asuransi Allianz atau ke kantor Allianz yang terdekat.</p>
    </div>

    <div class="container video text-center mt-5">
      <div class="row content">
          <div class="col-lg-6">
            <iframe width="560" height="315" class="rounded" src="https://www.youtube.com/embed/B5OVHg0dJJw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          </div>
          <div class="col-lg-6">
            <h2>Video proses klaim asuransi jiwa Allianz</h2><br>
            <p class="text-darkblue p-3">Video ini menerangkan proses klaim asuransi jiwa Allianz agar Anda dapat mengetahui langkah-langkah penting dalam mengajukan klaim. Pastikan Agen Asuransi Anda juga memberikan informasi yang benar pada saat Anda mengajukan klaim melalui Agen Anda.</p>
          </div>
        </div>
    </div>
    
  </div>
</section>
<!-- End Klaim -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <h1 class="text-center">Alur Klaim Asuransi Jiwa</h1>

        <div class="faq-list mt-5">
          <ul>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Prosedur Pengajuan Klaim <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Tindakan pertama yang harus dilakukan jika terjadi kerugian akibat kecelakaan atau kehilangan. Anda harus melapor kepada kami dalam atau segera menghubungi Agen asuransi jiwa Anda untuk memperoleh bantuan.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Alur Klaim Asuransi Jiwa & Kesehatan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <a class="text-dark" href="admin/assets/docs/alur-klaim-asuransi-jiwa.jpg" target="_blank"><p>Lihat alur klaim asuransi jiwa</p></a>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Persyaratan Klaim Meninggal Dunia <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  1. Polis Asli<br>
                  2. Formulir Klaim Meninggal Dunia Diisi Oleh Penerima Manfaat<br>
                  3. Formulir Klaim Meninggal Dunia Diisi Oleh Dokter<br>
                  4. Formulir Surat Kuasa Pemaparan Isi Rekam Medik - diisi dan tanda tangan di atas meterai oleh Ahli Waris<br>
                  5. Surat Keterangan Meninggal dari Instansi Pemerintahan yang berwenang (Kutipan Akte Kematian) yang di legalisir<br>
                  6. Bila Meninggal karena kecelakaan, lampirkan Berita Acara Pemeriksaan (BAP) dari Kepolisian<br>
                  7. Bila meninggal di rumah tanpa perawatan Dokter, buat kronologis kematian dan di tandatangani oleh Ahli Waris<br>
                  8. Copy hasil pemeriksaan medis yang telah dilakukan Tertanggung<br>
                  9. Formulir Pemberitahuan No. Rekening  dan Fotocopy Buku Rekening<br>
                  10. Fotocopy Identitas diri Tertanggung<br>
                  11. Fotocopy Identitas diri Ahli waris<br>
                  12. Fotocopy Kartu Keluarga<br>
                  13. Dokumen lain bila diperlukan
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Persyaratan Klaim Cacat Tetap<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  1. Polis Asli<br>
                  2. Formulir Klaim Cacat Diisi Oleh Tertanggung<br>
                  3. Formulir Klaim Cacat Diisi Oleh Dokter<br>
                  4. Copy hasil pemeriksaan medis yang telah dilakukan Tertanggung dan hasil baca foto Rontgen dari bagian yang cacat<br>
                  5. Formulir Surat Kuasa Pemaparan Isi Rekam Medik<br>
                  6. Formulir Pemberitahuan No. Rekening  dan Fotocopy Buku Rekening<br>
                  7. Fotocopy Identitas diri Tertanggung<br>
                  8. Dokumen lain bila diperlukan
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">Persyaratan Klaim Penyakit Kritis<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                <p>
                  1. Polis Asli<br>
                  2. Formulir Pengajuan Klaim Penyakit Kritis <br>
                  3. Formulir Surat Keterangan Dokter - disesuaikan dengan penyakit kritis yang di derita<br>
                  4. Copy hasil pemeriksaan medis yang telah dilakukan Tertanggung<br>
                  5. Formulir Surat Kuasa Pemaparan Isi Rekam Medik<br>
                  6. Formulir Pemberitahuan No. Rekening  dan Fotocopy Buku Rekening<br>
                  7. Fotocopy Identitas diri Tertanggung<br>
                  8. Dokumen lain bila diperlukan
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <h1 class="text-center">Download Formulir Klaim Asuransi Jiwa</h1>

        <div class="faq-list mt-5">
          <ul>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-1" class="collapsed">Formulir Pengajuan Klaim - Flexi Care<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse" data-parent=".faq-list">
                <a class="text-dark" href="admin/assets/docs/formulirklaimflexicare.pdf" target="_blank"><p>Download Formulir Pengajuan Klaim - Flexi Care</p></a>
              </div>
            </li> 

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Formulir Klaim Meninggal Dunia dan Meninggal Karena Kecelakaan<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <a class="text-dark" href="admin/assets/docs/Formulir-Klaim-Meninggal-Dunia-danMeninggal-karena-Kecelakaan-di-isi-olehTermaslahat-atauPenerima-Manfaat.pdf" target="_blank"><p>Download Formulir Klaim Meninggal dunia di isi oleh Ahli Waris / Penerima Manfaat</p></a>
                <a class="text-dark" href="admin/assets/docs/formulir-death-claim---beneficiary-english-.pdf" target="_blank"><p>Formulir Death Claim Beneficiary</p></a>
                <a class="text-dark" href="admin/assets/docs/formulir-klaim-meninggal-dunia-di-isi-oleh-dokter.pdf" target="_blank"><p>Download Formulir Klaim Meninggal dunia di isi oleh Dokter</p></a>
                <a class="text-dark" href="admin/assets/docs/formulir-no-rekening-bank.pdf" target="_blank"><p>Download Formulir No Rekening Bank</p></a>
                <a class="text-dark" href="admin/assets/docs/3b.crs-fatca-death-claim-bahasa-.pdf" target="_blank"><p>Download Formulir FATCA&CRS – Klaim Individu</p></a>
                <a class="text-dark" href="admin/assets/docs/12.-form-entity-comb.--claim.pdf" target="_blank"><p>Download Formulir FATCA&CRS – Klaim Perusahaan (Institusi)</p></a>
                <a class="text-dark" href="admin/assets/docs/10a.poa-claim.pdf" target="_blank"><p>Download Formulir Surat Kuasa - Individu</p></a>
                <a class="text-dark" href="admin/assets/docs/Surat-Kuasa-Pelepasan-Informasi-dan-Data-Medik.pdf" target="_blank"><p>Download Surat Kuasa Pelepasan Informasi dan Data Medik</p></a>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Formulir Klaim Penyakit Kritis<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <a class="text-dark" href="admin/assets/docs/10a.poa-claim(1).pdf" target="_blank"><p>Download Formulir Surat Kuasa - Individu</p></a>
                <a class="text-dark" href="admin/assets/docs/Panduan-Pemakaian-Formulir-Penyakit-Kritis.pdf" target="_blank"><p>Download Panduan Pemakaian Formulir Penyakit Kritis</p></a>
                <a class="text-dark" href="admin/assets/docs/Formulir-Pengajuan-Klaim-Penyakit-Kritis.pdf" target="_blank"><p>Download Formulir Pengajuan Klaim Penyakit Kritis</p></a>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Formulir Klaim Cacat<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <a class="text-dark" href="admin/assets/docs/Formulir-Klaim-Cacat-di-isi-olehPemegang-Polis.pdf" target="_blank"><p>Download Formulir Klaim Cacat di isi oleh Pemegang Polis</p></a>
                <a class="text-dark" href="admin/assets/docs/formulir-klaim-cacat-di-isi-oleh-dokter.pdf" target="_blank"><p>Download Formulir Klaim Cacat di isi oleh Dokter</p></a>
                <a class="text-dark" href="admin/assets/docs/formulir-no-rekening-bank.pdf" target="_blank"><p>Download Formulir No Rekening Bank</p></a>
                <a class="text-dark" href="admin/assets/docs/Surat-Kuasa-Pelepasan-Informasi-dan-Data-Medik.pdf" target="_blank"><p>Download Surat Kuasa Pelepasan Informasi dan Data Medik</p></a>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Formulir Surat Kuasa Rekam medis<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <a class="text-dark" href="admin/assets/docs/Surat-Kuasa-Pelepasan-Informasi-dan-Data-Medik.pdf" target="_blank"><p>Download Surat Kuasa Pelepasan Informasi dan Data Medik</p></a>
                <a class="text-dark" href="admin/assets/docs/penang-adventist-hospital.pdf" target="_blank"><p>Download Surat Kuasa Penang Adventist Hospital</p></a>
              </div>
            </li>



          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
  
