<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixydrops.com/oxpinshtml/main-html/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jun 2024 06:57:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Gallery -VeerNari Shakti Resettlement</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Oxpins HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/oxpins-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/oxpins.css" />
</head>

<style>
  /* Base Styles */
  body {
    background-color: #eee;
  }
  .hello {
    opacity: 1 !important;
  }

  /* Fullscreen Overlay */
  .full {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: 1000;
    background-color: rgba(0, 0, 0, 0.75);
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .full .content {
    width: 50vw;
    height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  /* Image & Video in Full View */
  .full .content img,
  .full .content video {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    border-radius: 8px;
    animation: zoomin 1s ease;
  }

  /* Hidden Class */
  .byebye {
    opacity: 0;
  }
  .byebye:hover {
    transform: scale(0.2) !important;
  }

  /* Gallery Grid */
  .gallery {
    display: grid;
    grid-column-gap: 8px;
    grid-row-gap: 8px;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-auto-rows: 8px;
  }

  /* Image Styles */
  .gallery img {
    max-width: 100%;
    border-radius: 8px;
    box-shadow: 0 0 16px #333;
    transition: all 1.5s ease;
  }
  .gallery img:hover {
    box-shadow: 0 0 32px #333;
  }

  /* Video Styles */
  .gallery video {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 0 16px #333;
    transition: all 1.5s ease;
    display: block;
  }
  .gallery video:hover {
    box-shadow: 0 0 32px #333;
  }

  /* Gallery Items */
  .gallery .content {
    padding: 4px;
  }
  .gallery .gallery-item {
    transition: all 0.5s ease;
    cursor: pointer;
  }
  .gallery .gallery-item:hover {
    transform: scale(1.025);
  }

  /* Responsive Grid */
  @media (max-width: 600px) {
    .gallery {
      grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
    }
  }
  @media (max-width: 400px) {
    .gallery {
      grid-template-columns: repeat(auto-fill, minmax(50%, 1fr));
    }
  }

  /* Zoom-in Animation */
  @keyframes zoomin {
    0% {
      max-width: 50%;
      transform: rotate(-30deg);
      filter: blur(4px);
    }
    30% {
      filter: blur(4px);
      transform: rotate(-80deg);
    }
    70% {
      max-width: 50%;
      transform: rotate(45deg);
    }
    100% {
      max-width: 100%;
      transform: rotate(0deg);
    }
  }
</style>

<body class="custom-cursor">

    <?php include('includes/header.php'); ?>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url()">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Pages</li>
                </ul>
             
            </div>
        </div>
    </section>




    <!--Page Header End-->

    <!--Gallery Page Start-->
    


        <section style="width: 90%; align-items: center; margin: auto;">
       <div class="container">
       <h2 class="text-success text-center fw-bold" style="margin-top: 50px;">
    Our Gallery
  </h2>
  <div class="gallery" id="gallery" style="margin-top: 50px;">
    <div class="gallery-item" style="grid-row-end: span 24;">
      <div class="content">
        <img src="assets/images/soldiers/1_ Ghat Banner Maj Vishnoi.jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 14;">
      <div class="content">
        <img src="assets/images/soldiers/Army truck banner 2023-01-24 at 19.41.04.jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 23;">
      <div class="content">
        <img src="assets/images/soldiers/banner Image 2022-07-11 at 11.42.26 AM.jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 30;">
      <div class="content">
        <img src="assets/images/army logo/gallery/full-shot-soldiers-war-zone_23-2150804361.jpg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 30;">
      <div class="content">
        <video src="assets/images/soldiers/1.mp4" controls="" autoplay="" muted=""
        ></video>
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 23;">
      <div class="content">
        <img src="assets/images/soldiers/banner SO Col. Vijay Mishra Sept 23.jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 26;">
      <div class="content">
        <img src="assets/images/soldiers/Banner_Major Mustafa_23 Oct_2022 (1).jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 18;">
      <div class="content">
        <img src="assets/images/soldiers/Self-defence.png" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 12;">
      <div class="content">
        <img src="assets/images/soldiers/Hindi front banner 5 x 5_sept 2023.jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 30;">
      <div class="content">
        <img src="assets/images/soldiers/banner_Major Mustafa_23 Oct_2022 (2).jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 18;">
      <div class="content">
        <img src="assets/images/soldiers/Self-defence.png" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 12;">
      <div class="content">
        <img src="assets/images/soldiers/Hindi front banner 5 x 5_sept 2023.jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 30;">
      <div class="content">
        <img src="assets/images/soldiers/banner_Major Mustafa_23 Oct_2022 (2).jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 18;">
      <div class="content">
        <img src="assets/images/soldiers/Self-defence.png" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 12;">
      <div class="content">
        <img src="assets/images/soldiers/Hindi front banner 5 x 5_sept 2023.jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 30;">
      <div class="content">
        <img src="assets/images/soldiers/banner_Major Mustafa_23 Oct_2022 (2).jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 18;">
      <div class="content">
        <img src="assets/images/soldiers/Self-defence.png" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 12;">
      <div class="content">
        <img src="assets/images/soldiers/Hindi front banner 5 x 5_sept 2023.jpeg" alt="" />
      </div>
    </div>
    <div class="gallery-item" style="grid-row-end: span 30;">
      <div class="content">
        <img src="assets/images/soldiers/banner_Major Mustafa_23 Oct_2022 (2).jpeg" alt="" />
      </div>
    </div>
  </div>
       </div>
</section>

       

    <script>

    </script>
    <?php include 'includes/footer.php' ?>
    <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/images/logo/vnslogo.png" height="143" alt="" /></a>

            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:vnsrfoundation@gmail.com">vnsrfoundation@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+91 9821 022 008">+91 9821 022 008</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>

    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>




    <!-- template js -->
    <script src="assets/js/oxpins.js"></script>

    <script>
  const gallery = document.querySelector("#gallery");

  const getVal = (elem, style) =>
    parseInt(window.getComputedStyle(elem).getPropertyValue(style));
  const getHeight = (item) =>
    item.querySelector(".content").getBoundingClientRect().height;

  const resizeAll = () => {
    const rowHeight = getVal(gallery, "grid-auto-rows");
    const rowGap = getVal(gallery, "grid-row-gap");
    gallery.querySelectorAll(".gallery-item").forEach((item) => {
      item.style.gridRowEnd =
        "span " + Math.ceil((getHeight(item) + rowGap) / (rowHeight + rowGap));
    });
  };

  // Handle both images and videos
  const allMedia = gallery.querySelectorAll("img, video");

  allMedia.forEach((media) => {
    if (
      (media.tagName === "IMG" && media.complete) ||
      media.tagName === "VIDEO"
    ) {
      resizeAll();
    }

    media.addEventListener("load", resizeAll);
    media.addEventListener("loadeddata", resizeAll); // for video
  });

  window.addEventListener("resize", resizeAll);

  gallery.querySelectorAll(".gallery-item").forEach((item) => {
    item.addEventListener("click", () => item.classList.toggle("full"));
  });
</script>
</body>


<!-- Mirrored from pixydrops.com/oxpinshtml/main-html/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jun 2024 06:57:52 GMT -->

</html>