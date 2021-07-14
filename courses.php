<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UB &mdash; Distance Learning</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="assets/img/favicon.png" type="image/png"/>
  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top " style="background-color: dimgray;">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope" style="color:#e1ad01;"></i> <a href="mailto:admin@ub.edu.ph">admin@ub.edu.ph</a>
        <i class="icofont-phone" style="color:#e1ad01;"></i> <a href="tel:+63439800041">+63.43.980.00.41</a>
      </div>
      <div class="social-links">
        <a target="_blank" href="https://twitter.com/ubatangas" class="twitter"><i class="icofont-twitter"></i></a>
        <a target="_blank" href="https://www.facebook.com/ubatangas" class="facebook"><i class="icofont-facebook"></i></a>
        <a target="_blank" href="https://vimeo.com/ubatangas" class="vimeo"><i class="icofont-vimeo"></i></i></a>
      </div>
    </div>
  </div>
<!-- ======= Header ======= -->
<?php include 'components/nav_courses.php';?>


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Courses</li>
        </ol>
        <h2>Courses</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section>
      <div class="container">
        <div class="row mb-3">
          <select class="form-select form-control col-lg-4 col-md-6 col-sm-12" aria-label="Default select example" style="margin-left: 1%;margin-right: 1%;" id="filter_data" onchange="filter_course()">
            <option value="">-- Course Category--</option>
             <?php
              include 'components/course_categ.php';
              foreach ($category as $list) {
                echo '<option value="'.$list['code'].'">'.$list['categ'].'</option>';
              }
              ?>
          </select>
        </div>
        <div class="row">
        <?php
  			$filter = $_GET['filter'];
  			include 'components/course_data.php';
  			foreach($subject as $sub){
  				$delay = 0;
  				// SKIP COURSE THAT IS NOT ASSOCIATED WITH THE CATEGORY
  				if($sub['code'] != $filter) continue;
                	echo '<div class="mt-4 mb-3 col-lg-8 col-md-8 col-sm-12">';
                	echo '<h3 style="color:#800000;">'.$sub['course_title'].'</h3>';
                	echo '<div>';
                	echo '<p>'.$sub['description'].'</p>';
                	echo '<p><b>Faculty:</b>&nbsp;'.$sub['faculty'].'</p>';
                	echo '<p><b>Duration:</b>&nbsp;'.$sub['duration'].'</p>';
                	echo '<a href="" class="btn btn-secondary btn-sm">Enroll</a>';
                	echo '</div>';
                	echo '</div>';
                	echo '<div class="mt-4 mb-3 col-lg-4">';
                	echo '<img src="'.$sub['image'].'" class="img-thumbnail"/>';
                	echo '</div>';
  			}
  			$delay = $delay + 150;
  		?>
		</div>
      </div>
    </section>

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="services">
      <div class="container">
        <div class="section-title">
          <span>Course Category</span>
          <h2>Course Category</h2>
          <p>We provide infinite learning...</p>
        </div>

        <div class="row">
          <?php
            include "components/course_categ.php";
            foreach($category as $x){
              $delay = 0;
              echo '<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay= "'.$delay.'">
                    <div class="icon-box">
                      <div class="icon"><i class="'.$x['icon'].'"></i></div>
                      <h4><a href="courses.php?filter='.$x['code'].'">'.$x['categ'].'</a></h4>
                      <p>'.$x['description'].'</p>
                    </div>
                  </div>';
            }
            $delay = $delay + 150;
          ?>
        </div>

      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->


<?php include 'components/footer.php';?>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#filter_data').val('<?=$filter;?>');
    });
  </script>
</body>
</html>


