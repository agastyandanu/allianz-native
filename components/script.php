  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script>
      function hitung() {
      var kurir = $('[name="kurir"]:checked').val();
      var total = $('#total').val();
      var ongkir = $("#ongkir").val();
      if (kurir == "gojek" || kurir == "Jemput Toko") {
        ongkir = 0;
      }
      var bayar = (parseFloat(total) + parseFloat(ongkir));


      if (parseFloat(ongkir) > 0) {
        $("#oksimpan").show();
      } else {
        $("#oksimpan").hide();
      }
      
      if (kurir == "gojek" || kurir == "Jemput Toko") {
        ongkir = 0;
      }
      $("#totalbayar").val(bayar);
      $("#testotal").html(toDuit(bayar));
      $("#totalcoret").html(toDuit(bayar));
      $("#jmlongkir").html(toDuit(ongkir));
      if (kurir == "gojek" || kurir == "Jemput Toko") {
        $("#biayap").hide();
        $("#oksimpan").show();
      } else {
        $("#biayap").show();
      }

      $("#jmlongkir").show();
    }
  </script>