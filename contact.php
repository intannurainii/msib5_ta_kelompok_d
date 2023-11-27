<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Deus | Contact</title>

    <meta charset="utf-8" />
    <!--[if IE
      ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"
    /><![endif]-->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700"
      rel="stylesheet"
    />

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-icons.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="img/apple-touch-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="img/apple-touch-icon-114x114.png"
    />

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
        <div class="blog__content mb-72">
                        <img
                src="img/content/about/about_bg.jpg"
                class="page-featured-img"
              />
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
                  <a href="mailto:themesupport@gmail.com"
                    >themesupport@gmail.com</a
                  >
                </li>
              </ul>

            </div>

            <div class="col">
              <div class="row justify-content-center">
                <div class="col-lg-12">
                  <!-- Contact Form -->
                  <form
                    id="contact-form"
                    class="contact-form mt-4 mb-30"
                    method="post"
                    action="#"
                  >
                    <div class="contact-name">
                      <label for="name"
                        >Name
                        <abbr title="required" class="required">*</abbr></label
                      >
                      <input name="name" id="name" type="text" />
                    </div>
                    <div class="contact-email">
                      <label for="email"
                        >Email
                        <abbr title="required" class="required">*</abbr></label
                      >
                      <input name="email" id="email" type="email" />
                    </div>
                    <div class="contact-subject">
                      <label for="email">Subject</label>
                      <input name="subject" id="subject" type="text" />
                    </div>
                    <div class="contact-message">
                      <label for="message"
                        >Message
                        <abbr title="required" class="required">*</abbr></label
                      >
                      <textarea
                        id="message"
                        name="message"
                        rows=""
                        required="required"
                      ></textarea>
                    </div>

                    <input
                      type="submit"
                      class="btn btn-lg btn-color btn-button"
                      value="Send Message"
                      id="submit-message"
                    />
                    <div id="msg" class="message"></div>
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
      <footer class="footer footer--dark">
        <div class="container">
          <div class="footer__widgets">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <aside class="widget widget-logo">
                  <a href="index.html">
                    <img
                      src="img/logo_default_white.png"
                      srcset="
                        img/logo_default_white.png    1x,
                        img/logo_default_white@2x.png 2x
                      "
                      class="logo__img"
                      alt=""
                    />
                  </a>
                  <p class="copyright">
                    &copy;
                    <script>
                      document.querySelector(".copyright").innerHTML +=
                        new Date().getFullYear();
                    </script>
                    Deus | Made by <a href="https://deothemes.com">DeoThemes</a>
                  </p>
                  <div class="socials socials--large socials--rounded mb-24">
                    <a
                      href="#"
                      class="social social-facebook"
                      aria-label="facebook"
                      ><i class="ui-facebook"></i
                    ></a>
                    <a
                      href="#"
                      class="social social-twitter"
                      aria-label="twitter"
                      ><i class="ui-twitter"></i
                    ></a>
                    <a
                      href="#"
                      class="social social-google-plus"
                      aria-label="google+"
                      ><i class="ui-google"></i
                    ></a>
                    <a
                      href="#"
                      class="social social-youtube"
                      aria-label="youtube"
                      ><i class="ui-youtube"></i
                    ></a>
                    <a
                      href="#"
                      class="social social-instagram"
                      aria-label="instagram"
                      ><i class="ui-instagram"></i
                    ></a>
                  </div>
                </aside>
              </div>

              <div class="col-lg-2 col-md-6">
                <aside class="widget widget_nav_menu">
                  <h4 class="widget-title">Useful Links</h4>
                  <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">News</a></li>
                    <li><a href="categories.html">Advertise</a></li>
                    <li><a href="shortcodes.html">Support</a></li>
                    <li><a href="shortcodes.html">Features</a></li>
                    <li><a href="shortcodes.html">Contact</a></li>
                  </ul>
                </aside>
              </div>

              <div class="col-lg-4 col-md-6">
                <aside class="widget widget-popular-posts">
                  <h4 class="widget-title">Popular Posts</h4>
                  <ul class="post-list-small">
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-100">
                            <a href="single-post.html">
                              <img
                                data-src="img/content/post_small/post_small_1.jpg"
                                src="img/content/post_small/post_small_1.jpg"
                                alt=""
                                class="lazyloaded"
                              />
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html"
                              >Follow These Smartphone Habits of Successful
                              Entrepreneurs</a
                            >
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <span>by</span>
                              <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">Jan 21, 2018</li>
                          </ul>
                        </div>
                      </article>
                    </li>
                    <li class="post-list-small__item">
                      <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                          <div class="thumb-container thumb-100">
                            <a href="single-post.html">
                              <img
                                data-src="img/content/post_small/post_small_2.jpg"
                                src="img/content/post_small/post_small_2.jpg"
                                alt=""
                                class="lazyloaded"
                              />
                            </a>
                          </div>
                        </div>
                        <div class="post-list-small__body">
                          <h3 class="post-list-small__entry-title">
                            <a href="single-post.html"
                              >Lose These 12 Bad Habits If You're Serious About
                              Becoming a Millionaire</a
                            >
                          </h3>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <span>by</span>
                              <a href="#">DeoThemes</a>
                            </li>
                            <li class="entry__meta-date">Jan 21, 2018</li>
                          </ul>
                        </div>
                      </article>
                    </li>
                  </ul>
                </aside>
              </div>

              <div class="col-lg-3 col-md-6">
                <aside class="widget widget_mc4wp_form_widget">
                  <h4 class="widget-title">Newsletter</h4>
                  <p class="newsletter__text">
                    <i class="ui-email newsletter__icon"></i>
                    Subscribe for our daily news
                  </p>
                  <form class="mc4wp-form" method="post">
                    <div class="mc4wp-form-fields">
                      <div class="form-group">
                        <input
                          type="email"
                          name="EMAIL"
                          placeholder="Your email"
                          required=""
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="submit"
                          class="btn btn-lg btn-color"
                          value="Sign Up"
                        />
                      </div>
                    </div>
                  </form>
                </aside>
              </div>
            </div>
          </div>
        </div>
        <!-- end container -->
      </footer>
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
      $(document).ready(function () {
        var gmapDiv = $("#google-map");
        var gmapMarker = gmapDiv.attr("data-address");

        gmapDiv
          .gmap3({
            zoom: 16,
            address: gmapMarker,
            oomControl: true,
            navigationControl: true,
            scrollwheel: false,
            styles: [
              {
                featureType: "all",
                elementType: "all",
                stylers: [{ saturation: "0" }],
              },
            ],
          })
          .marker({
            address: gmapMarker,
            icon: "img/map_pin.png",
          })
          .infowindow({
            content: "V Tytana St, Manila, Philippines",
          })
          .then(function (infowindow) {
            var map = this.get(0);
            var marker = this.get(1);
            marker.addListener("click", function () {
              infowindow.open(map, marker);
            });
          });
      });
    </script>
  </body>
</html>
