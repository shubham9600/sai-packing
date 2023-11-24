
       <?php
              include "header.php"
           ?>
           
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="#" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><img src="myphoto/logo.png" alt="" width="100px"
                            height="80px"></i></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="#shub1" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="prouct.php" class="nav-item nav-link">prouct</a>
                      
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="#" class="btn btn-primary py-2 px-4">Book A order</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">साई पॅकेजिंग</h1>
                            <br>
                            <p class="text-white animated slideInLeft mb-4 pb-2 hp">We will help you to make a perfect package solution for your business.
                                We design and manufacture paper box
                                and delivery globally.</p>
                            <a href="#" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A
                                order</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
    <!-- Team Start -->
    <div class="shub" id="shub1">
    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <!-- <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5> -->
                <h1 class="mb-5">THE ꜰᴏᴜɴᴅᴇʀ </h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <h5 class="mb-0">mr.sangram patil </h5>
                        <small>ꜰᴏᴜɴᴅᴇʀ</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <h5 class="mb-0">mr.sushant Gaikwad</h5>
                        <small>ꜰᴏᴜɴᴅᴇʀ</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <h5 class="mb-0">mr.padurang kashid</h5>
                        <small>Mananger</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <br><br>
    <!-- Team End -->
<!-- slider start -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="myphoto/download-removebg-preview.png" class="d-block w-100" alt="..." width="100%" height="300px">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   <!-- slider end -->
   <br><br>

    <!-- video -->
<div class="video1">
    <video src="myphoto/WhatsApp Video 2023-10-30 at 15.18.21_0d058673.mp4"  muted autoplay id="v1"></video>
</div>

<!-- video end -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                    <a class="btn btn-link" href="#">About Us</a>
                    <a class="btn btn-link" href="#">Contact Us</a>
                    <a class="btn btn-link" href="#">Reservation</a>
                    <a class="btn btn-link" href="#">Privacy Policy</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>AtPost-kadalas ,Tal-Sangola
                        Dist-Solapur, 413308</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>saipacking@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                    <h5 class="text-light fw-normal">thursday - tuesday</h5>
                    <p>8:30AM - 5:30PM</p>
                   
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                    <p>To Order that Product enter Your E-mail and SignUp</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#"> Name</a>

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com/">HTML Codex</a><br><br>
                      
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="#">Home</a>
                            <a href="#">Cookies</a>
                            <a href="#">Help</a>
                            <a href="#">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="../../code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../../cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from themewagon.github.io/restoran/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2023 14:29:55 GMT -->

</html>