<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME'], '.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Deus | Contact</title>

  <meta charset="utf-8" />
  <!--[if IE
      ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"
    /><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700" rel="stylesheet" />

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />

  <!-- Lazyload (must be placed in head in order to work) -->
  <script src="js/lazysizes.min.js"></script>
</head>

<body class="style-default style-rounded">
  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>


  <main class="main oh" id="main">

    <!-- Navigation -->
    <?php include "navbar.php" ?>
    <!-- end navigation -->

    <!-- Breadcrumbs -->
    <div class="container">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a href="index.html" class="breadcrumbs__url">Home</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">Contact Us</li>
      </ul>
    </div>

    <div class="main-container container" id="main-container">
      <!-- post content -->
      <section class="section section-bg" id="call-to-action" style="background-image: url(img/content/about/about_bg.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="cta-content">
                <br>
                <br>
                <h2><em>Contact Us</em></h2>
                <p>Drop Us a Message</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="blog__content mb-72">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-title">Drop Us a Message</h1>
            <p>
              Don't hesitate to get in touch. We will reply you as soon as
              possible.
            </p>

            <ul class="contact-items">
              <li class="contact-item">
                <address>Centre Inc. CA 48792 Star Apple ave. 54</address>
              </li>
              <li class="contact-item">
                <a href="tel:+1-800-1554-456-123">+ 1 (800) 155 4561</a>
              </li>
              <li class="contact-item">
                <a href="mailto:themesupport@gmail.com">themesupport@gmail.com</a>
              </li>
            </ul>

          </div>

          <div class="col">
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <!-- Contact Form -->
                <form id="contact-form" class="contact-form mt-4 mb-30" method="post" action="proses-input.php">
                  <div class="contact-name">
                    <label for="name">Name
                      <abbr title="required" class="required">*</abbr></label>
                    <input name="name" id="name" type="text" />
                  </div>
                  <div class="contact-email">
                    <label for="email">Email
                      <abbr title="required" class="required">*</abbr></label>
                    <input name="email" id="email" type="email" />
                  </div>
                  <div class="contact-subject">
                    <label for="email">Subject</label>
                    <input name="subject" id="subject" type="text" />
                  </div>
                  <div class="contact-message">
                    <label for="message">Message
                      <abbr title="required" class="required">*</abbr></label>
                    <textarea id="message" name="message" rows="" required="required"></textarea>
                  </div>
                  <input type="submit" id="contact" name="contact" class="btn btn-lg btn-color" value="Send Message">
                  <!-- <div id="msg" class="message"></div> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end post content -->
    </div>
    <!-- end main container -->

    <!-- Footer -->
    <?php include "footer.php" ?>
    <!-- end footer -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>
  </main>
  <!-- end main-wrapper -->

  <!-- jQuery Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/owl-carousel.min.js"></script>
  <script src="js/flickity.pkgd.min.js"></script>
  <script src="js/twitterFetcher_min.js"></script>
  <script src="js/jquery.newsTicker.min.js"></script>
  <script src="js/modernizr.min.js"></script>
  <!-- 
    1. Generate your key here - https://developers.google.com/maps/documentation/javascript/get-api-key
    2. Paste your key in the script below.
  -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoQ3_zzRfW-hYspkwr5kvwCwLPGZsN4nw"></script>
  <script src="js/gmap3.min.js"></script>
  <script src="js/scripts.js"></script>

  <!-- Google Map -->
  <script type="text/javascript">
    $(document).ready(function() {
      var gmapDiv = $("#google-map");
      var gmapMarker = gmapDiv.attr("data-address");

      gmapDiv
        .gmap3({
          zoom: 16,
          address: gmapMarker,
          oomControl: true,
          navigationControl: true,
          scrollwheel: false,
          styles: [{
            featureType: "all",
            elementType: "all",
            stylers: [{
              saturation: "0"
            }],
          }, ],
        })
        .marker({
          address: gmapMarker,
          icon: "img/map_pin.png",
        })
        .infowindow({
          content: "V Tytana St, Manila, Philippines",
        })
        .then(function(infowindow) {
          var map = this.get(0);
          var marker = this.get(1);
          marker.addListener("click", function() {
            infowindow.open(map, marker);
          });
        });
    });
  </script>
</body>

</html>