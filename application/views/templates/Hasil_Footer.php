<footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">

        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> Sistem Pakar Diagnosa Kerusakan Komputer. Crafted by <a href="https://asgardev.karissa.id" target="_blank">ASGARDEV</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


<script src="<?= base_url('assetshasil/'); ?>js/jquery.min.js"></script>
<script src="<?= base_url('assetshasil/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assetshasil/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assetshasil/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assetshasil/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assetshasil/'); ?>js/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assetshasil/'); ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assetshasil/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assetshasil/'); ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assetshasil/'); ?>js/aos.js"></script>
<script src="<?= base_url('assetshasil/'); ?>js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url('assetshasil/'); ?>js/scrollax.min.js"></script>

<script src="<?= base_url('assetshasil/'); ?>js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(document).ready(function() {
    $('.btn-logout').on('click', function(e) {
      e.preventDefault();
      var href = $(this).attr('href');
      Swal.fire({
        title: 'Yakin ingin keluar?',
        text: "Sesi Anda akan diakhiri.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3b82f6',
        cancelButtonColor: '#ef4444',
        confirmButtonText: 'Ya, Keluar!',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = href;
        }
      });
    });
  });
</script>

</body>

</html>