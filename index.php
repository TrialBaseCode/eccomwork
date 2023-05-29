
<?php 
include('functions/userfunction.php');
include('include/header.php'); 
include('include/slider.php');

?>

<!-- <?php
  if (isset($_SESSION['message'])) {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message'];  ?>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    unset($_SESSION['message']);
   }
?> -->
<main >
  <section class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4>Trending Products</h4>
          <hr>
          <div class="row owl-carousel">
          <?php 
             $trendingProducts = getAllTrending();
             if (mysqli_num_rows($trendingProducts) > 0) {
                foreach ($trendingProducts as $item) {
                  ?>
                      <div class="col-md-12 mb-2">
                          <a href="product-view.php?product=<?= $item['slug']; ?>" rel="noopener noreferrer" class="text-decoration-none">
                              <div class="card collection-card">
                                  <div class="card-body">
                                      <div class="collection-card-image">
                                          <img src="uploads/<?= $item['image']; ?>" alt="Product image<?= $item['name']; ?>">
                                      </div>
                                      <div class="colection-card-heading">
                                          <h5 class="text-center mt-4"><?= $item['name'];  ?></h5>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </div>
                  <?php
                }
             }
           ?>
          </div>
        </div>
      </div>
       <!-- <h4>Hello World <i class="fa-solid fa-house"></i></h4> -->
    </div>
  </section>
  <section class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4>About</h4>
          <hr>
          <div class="abt-para">
             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, totam. Reiciendis rerum repellendus laborum illum. Sequi nostrum asperiores architecto dolores ipsam, repellendus nesciunt est quaerat nulla quam autem saepe deleniti.</p>
             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, totam. Reiciendis rerum repellendus laborum illum. Sequi nostrum asperiores architecto dolores ipsam, repellendus nesciunt est quaerat nulla quam autem saepe deleniti.</p>
          </div>
        </div>
      </div>
       <!-- <h4>Hello World <i class="fa-solid fa-house"></i></h4> -->
    </div>
  </section>
  <section class="py-4 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h4 class="text-white">E-shop</h4>
          <hr>
          <div class="e-shop-list text-white d-flex  flex-column">
             <a href="index.php"><i class="fa fa-angle-right p-2"></i> Home</a>
             <a href="#"><i class="fa fa-angle-right p-2"></i> About Us</a>
             <a href="#"><i class="fa fa-angle-right p-2"></i> My Cart</a>
             <a href="#"><i class="fa fa-angle-right p-2"></i> Our Collections</a>
          </div>
        </div>
        <div class="col-md-3">
          <h4 class="text-white">Address</h4>
          <hr>
          <div class="e-shop-list text-white d-flex  flex-column">
             <p>
              Gtech flat 503 ,
              lomi villa
              gutia 
             </p>
             <a href="tel:9863246897"><i class="fa fa-phone"></i> +919863246897</a>
             <a href="mailto:abc@gmail.com"><i class="fa fa-envelope"></i> abc@gmail.com</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="emb-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29937.30060621391!2d85.83583589999999!3d20.29353675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909f2fb8416b5%3A0xf04a450cccd03186!2zVXRrYWwgVW5pdmVyc2l0eSAsIEJodWJhbmVzd2FyKCDgrIngrKTgrY3grJXgrLMg4Kys4Ky_4Ky24K2N4K2x4Kys4Ky_4Kym4K2N4K2f4Ky-4Kyz4K2fICwg4Kyt4K2B4Kys4Kyo4K2H4Ky24K2N4K2x4KywICk!5e0!3m2!1sen!2sin!4v1685363785050!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
       <!-- <h4>Hello World <i class="fa-solid fa-house"></i></h4> -->
    </div>
  </section>
  <div class="copyright-sec py-2 bg-danger text-center  text-white">
      <p class="mb-0">All Right reserved. Copyright@ company <?= date('Y') ?></p>
    </div>
</main>

<?php include('include/footer.php'); ?>