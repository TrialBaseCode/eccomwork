<footer class="footer pt-5">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-12">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="/Aboutus" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="/Service" class="nav-link text-muted" target="_blank">Service</a>
              </li>
              <li class="nav-item">
                <a href="/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="/Contact" class="nav-link pe-0 text-muted" target="_blank">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
</footer>
  
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/core/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
<!--Alertify JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
  <?php if(isset($_SESSION['message'])) 
  {   ?>
      alertify.set('notifier','position', 'top-right');
      alertify.success('<?= $_SESSION['message']; ?>');
      <?php 

      unset( $_SESSION['message']);
  } 
  ?>
</script>


</body>
</html>