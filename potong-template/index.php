<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>cinta</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@2.15.1/devicon.min.css" />

  <!-- Tooltip Start -->

  <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@2.16.0/devicon.min.css">

  <style>
     #hero:before {
    content: "";
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1; }
   </style>


</head>



<body>

  <!-- LETAK PEMANGGILAN DATA DI BACKEND MENGGUNAKAN PHP start here -->
     <?php
      include "../sb-admin2CV/connection.php";

       $tampil_profile = mysqli_query($koneksi, "SELECT * FROM profile");
       $p = mysqli_fetch_object($tampil_profile);
     ?>

   <!--  Mobile nav toggle button -->
   <i class="header-toggle bi bi-list d-xl-none"></i>
   <header id="header" >
    
     <div class="d-flex flex-column">

      <div class="profile">

        <!-- menampilkan data foto sidebar start-->
       <?php
        include "../sb-admin2CV/connection.php";
        $tampil_sidebar_photo = mysqli_query($koneksi, "SELECT* FROM
        sidebar_photo");
        $sb = mysqli_fetch_object($tampil_sidebar_photo);
       ?>

       <!-- end -->

        <img src="../sb-admin2CV/foto/<?php echo $sb->sidebar_photo ?>" alt=""
        class="img-fluid rounded-circle">
        <!-- <h1 class="text-light"><a href="index.html">Alex Smith</a></h1> -->
        <h1 class="text-light"><a href="index.php"><?php echo $p->nama ?></a></h1>
    
        <div class="social-links mt-3 text-center">
          <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
          <a href="<?php echo $p->linkedin ?>" class="linkeid" target="_blank"><i
          class="bx bxl-linkeid"></i></a>
        </div>
      </div>

        <nav id="navmenu" class="nav-menu navbar">
           <ul>
             <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
             <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Overview</span></a></li>
             <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Proficiency</span></a></li>
             <li><a href="#education" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Education</span></a></li>
             <li><a href="#experience" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Experience</span></a></li>
             <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
             <li><a href="#services" class="nav-link Scrollto"><i class="bx bx-server"></i> <span>Referees</span></a></li>
             <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
           </ul>
        </nav><!-- .nav-menu-->
    </div>
   </header>
           <main class="main">

            <!-- ======= Hero Section ======= -->
            <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
             <div class="hero-container" data-aos="fade-in">
               <h1>cinta amelia</h1>
               <p>saya <span class="typed" data-typed-items="pekerja keras, baik banget, ramah"></span></p>
             </div>
            </section><!-- End Hero -->

            <main id="main">

                <!-- abaut section-->
              <section id="about" class="about">
                <div class="container">

                      <div class="section-title">
                        <h2>OVERVIEW</h2>
                        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                        <p style="text-align: justify;"><?php echo $p->about ?></p> <br>
                      </div>

                      <div class="row">
                         <div class="col-lg-4" data-aos="fade-right">
                           <img src="../sb-admin2CV/foto/<?php echo $sb->sidebar_photo ?>" class="img-fluid" alt="" width="350">
                         </div>
                         <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <!-- <h3>UI/UX Designer &amp; Web Developer.</h3> -->
                           <div class="section-title">
                            <h2>informasi pribadi</h2>
                           </div>
                           
                           <!-- <p class="fst-italic"> -->
                            <br>
                            <div class="row">
                               <div class="col-lg">
                                  <ul>
                                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li> -->
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong><span><?php echo $p->website ?></span></li> 
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $p->phone ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span><?php echo $p->address ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $p->email ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Nationality:</strong> <span><?php echo $p->nationality ?></span></li>
                                  </ul>
                                </div>
                            </div>
                          </div>
                </div>
              </section><!-- end abaut section -->

               <!-- facts Section -->
               <section id="facts" class="facts section">
               <div class="container" >

        <!-- <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
            </div>
          </div> -->

               </div> 

      </div>

    </section><!-- /facts Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section-bg">

      

      <!-- Section Title -->
      <div class="container">
        <div class="col-12 text-start">

          <h2>keterampilan it</h2>
            <div class="mb-4 text-start">
            <div class="d-flex flex-wrap align-items-center text-start">
                <?php include "../sb-admin2CV/connection.php";
                  // profile adalah nama tabel di database
                  $tampil_mobile = mysqli_query($koneksi, "SELECT * FROM mobile");
                  while ($m = mysqli_fetch_object($tampil_mobile)):
                ?>
               
                     <i style="font-size: 35px" class="icon-with-tooltip <?php echo $m->icon; ?> colored m-3"
                     data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $m->nama ?>"></i>
                    
                  <?php endwhile; ?>
              </div>
            </div>


      <div class="section-title mb-4">
           <h6 style="color:gray">FAMILIAR WITH</h6>
           <p>
            <hd class="title"> </hd>
            <p class="description "> 
              <?php include "../sb-admin2CV/connection.php";
                 // profile adalah nama tabel di database
                 $tampil_familiar = mysqli_query($koneksi, "SELECT * FROM familiar");
                while ($m = mysqli_fetch_object($tampil_familiar)) :
              ?>
                  <!-- <i style="color:grey; font-size: 35px" class="<?php echo $m->icon; ?> m-3"></i> -->
                  <i style="font-size:35px" class="icon-with-tooltip <?php echo $m->icon; ?> colored m-3"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top" title="<?php echo $m->nama ?>"></i>
                  <!-- untuk memunculkan TOOLTIP per icon dibutuhkan JavaScript as below -->
                  <!-- JavaScript start -->
                  <script>
                    document.addEventListener('DOMContentLoaded', function() {
                      var tooltips = new bootstrap.Tooltip(document.querySelector('.<?php echo $m->icon ?>'));
                    })
                  </script>
                  <!-- JavaScript end -->
                  <!-- NEXT, we'll scrolldown to end of the body. -->
                  <!-- In order to memunculkan TOOLTIP text di semua icon, tambahkan JavaScr -->
                <?php endwhile; ?>
            </p>
           </p>
      </div>
      <div class="section-title mb-4" style="color: grey;">
         <h6>TOOLS & PLATFORMS</h6>
         <p>
             <h4 class="title"> </h4>
            <p class="description"> <?php include "../sb-admin2CV/connection.php";
                                // profile adalah nama tabel di database
                                $tampil_tools = mysqli_query($koneksi, "SELECT*FROM tools");
                              while ($m = mysqli_fetch_object($tampil_tools)):
                                ?>
                                <!-- <i style="color:grey; font-size: 35px" class="<?php echo $m->icon; ?> m-3"></i> -->
                                  <i style="font-size: 35px" class="icon-with-tooltip <?php echo $m->icon; ?> colored m-3" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $m->nama ?>"></i>
                                  <script>
                                     document.addEventListener('DOMContentLoaded', function() {
                                       var tooltips = new bootstrap.Tooltip (document.querySelector('.<?php echo $m->icon ?>'));
                                      })
                                  </script>
                              <?php endwhile; ?>
            </p>
          </p>
      </div>
       <div class="section-title mt-4">
              <h2>LANGUAGE PROFICIENCY</h2>
                 <?php include "../sb-admin2CV/connection.php";
                    // Menampilkan data language
                    $tampil_language = mysqli_query($koneksi, "SELECT * FROM language ORDER BY id_language DESC");
                 while ($l = mysqli_fetch_object($tampil_language)) :
                  ?>
                      <div class="row">
                        <div class="col">
                            <h6 class="skill" style="color: grey;">
                             <?php echo $l->bahasa; ?>
                            </h6>
                        </div>
                        <div class="col text-end">
                          <img src="../sb-admin2CV/fotobende/<?php echo $l->flag; ?>"
                          alt="<?php echo $l->bahasa; ?>"
                          class="val"
                          width="40">
                        </div>
                      </div>

                 <?php endwhile; ?>
        </div>
        <div class="section-title mt-4">
          <h2>ADDITIONAL SKILLS</h2>
        </div>

        <div class="section-title mt-4">
          <div class="col-lg" data-aos="fade-up">
            <?php
            include "../sb-admin2CV/connection.php";
            $tampil_skill = mysqli_query($koneksi, "SELECT*FROM skill ORDER BY id_skill DESC");
            while($s = mysqli_fetch_object($tampil_skill)):
              ?>
              <span><?php echo $s->nama_skill ?></span>
            <?php endwhile; ?>
            <div class="progress">
              
                    
            <!--<div class="progress">
              <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> End Skills Item 

            <div class="progress">
              <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> End Skills Item 

            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>End Skills Item 
          </div>

          <div class="col-lg-6">
            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> End Skills Item

            <div class="progress">
              <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> End Skills Item

            <div class="progress">
              <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> End Skills Item 

          </div>-->
            </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

<!-- Resume Section -->
<section id="resume" class="resume section">

  <div class="container">
    <div class="row">
      <div class="col-lg-12" data-aos="fade-up">

        <?php include "../sb-admin2CV/connection.php"; ?>

        <!-- SECTION: EDUCATION -->
        <div class="section-title">
          <h2 id="education">Education</h2>
        </div>

        <?php 
        $tampil_education = mysqli_query($koneksi, "SELECT * FROM education ORDER BY id_education DESC");
        while($e = mysqli_fetch_object($tampil_education)) : 
        ?>
          <div class="resume-item">
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <h4><?php echo $e->nama_jurusan; ?></h4>
                <p><em><?php echo $e->tempat_belajar; ?></em></p>
                <p><?php echo $e->deskripsi; ?></p>
              </div>
              <!-- Memperbaiki tag h5 yang sebelumnya ditutup </p> -->
              <h5><?php echo isset($e->tahun) ? $e->tahun : ''; ?></h5> 
            </div>
          </div>
        <?php endwhile; ?>


        <!-- SECTION: TRAINING -->
        <div class="section-title mt-4">
          <h2 id="training">Training</h2>
        </div>

        <?php
        $tampil_training = mysqli_query($koneksi, "SELECT * FROM training ORDER BY id_training DESC");
        while ($e = mysqli_fetch_object($tampil_training)):     
        ?>
          <div class="resume-item">
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <h4><?php echo $e->nama_training; ?></h4>
                <p><em><?php echo $e->tempat_training; ?></em></p>
                <p><?php echo $e->deskripsi; ?></p>
              </div>
              <h5><?php echo $e->tahun_training; ?></h5>
            </div>
          </div>
        <?php endwhile; ?>


        <!-- SECTION: EXPERIENCE -->
        <div class="section-title mt-5">
          <h2 id="experience">Experience</h2>
        </div>

        <?php
        $tampil_job = mysqli_query($koneksi, "SELECT * FROM job ORDER BY tahun_bekerja DESC");
        while ($e = mysqli_fetch_object($tampil_job)):
        ?>
          <div class="resume-item">
             <div class="d-flex justify-content-between align-items-start">
                <div>
                   <h4><?php echo $e->nama_pekerjaan; ?></h4>
                   <p><em><?php echo $e->tempat_bekerja; ?></em></p>
                   <ul>
                      <li><?php echo $e->deskripsi; ?></li>
                   </ul>
                 </div>
                    <h5><?php echo $e->tahun_bekerja; ?></h5>
               </div>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </div>

</section><!-- /Resume Section -->

    <!-- Portfolio Section -->
   <!-- Portfolio Section -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container">

    <!-- Section Title -->
    <div class="section-title">
      <h2>Portfolio</h2>
    </div><!-- End Section Title -->

    <div class="container">
      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

        <?php
        include "../sb-admin2CV/connection.php";
        
        // Loop 1: Menampilkan semua portfolio
        $tampil_portfolio = mysqli_query($koneksi, "SELECT * FROM portfolio ORDER BY id_portfolio DESC");
        while ($pf = mysqli_fetch_object($tampil_portfolio)):
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../sb-admin2CV/foto/<?php echo $pf->img; ?>" class="img-fluid" alt="<?php echo $pf->judul_portfolio; ?>">
              <div class="portfolio-links">
                <a href="../sb-admin2CV/foto/<?php echo $pf->img; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $pf->judul_portfolio; ?>">
                  <i class="bx bx-plus"></i>
                </a>
                <a href="<?php echo trim($pf->link); ?>" target="_blank" rel="noopener noreferrer" title="More Details">
                  <i class="bx bx-link"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>

        <?php 
        // Loop 2: Menampilkan khusus portfolio jenis 'web'
        $tampil_web = mysqli_query($koneksi, "SELECT * FROM portfolio WHERE jenis = 'web'");
        while ($pf = mysqli_fetch_object($tampil_web)):
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="../sb-admin2CV/foto/<?php echo $pf->img; ?>" class="img-fluid" alt="<?php echo $pf->judul_portfolio; ?>">
              <div class="portfolio-links">
                <a href="../sb-admin2CV/foto/<?php echo $pf->img; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $pf->judul_portfolio; ?>">
                  <i class="bx bx-plus"></i>
                </a>
                <a href="<?php echo trim($pf->link); ?>" target="_blank" rel="noopener noreferrer" title="More Details">
                  <i class="bx bx-link"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </div>
</section><!-- /Portfolio Section -->

    
   
  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">iPortfolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | <a href="https://bootstrapmade.com/tools/">DevTools</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script>
document.addEventListener('DOMContentLoaded', function () {
    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    )

    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
})
</script>



<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>