<footer class="footer">
  <div class="container">
    <div class="copyright">
      <div><strong>Crafted by ASGARDEV</strong></div>
      &copy; 2019-2026 Sistem Pakar Diagnosa Kerusakan Komputer. Portfolio demo by ASGARDEV.
    </div>
  </div>
</footer>
</div>



</body>

<script src="<?= base_url('assets2'); ?>/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets2'); ?>/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?= base_url('assets2'); ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?= base_url('assets2'); ?>/js/awesome-landing-page.js" type="text/javascript"></script>
<script src="<?= base_url('assets2'); ?>/js/script.js" type="text/javascript"></script>
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

</html>
