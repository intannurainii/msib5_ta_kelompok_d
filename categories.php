<!DOCTYPE html>
<html lang="en">

<head>
  <title>Deus | Categories</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/style.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Lazyload (must be placed in head in order to work) -->
  <script src="js/lazysizes.min.js"></script>

</head>

<body class="bg-light style-default style-rounded">

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
    <?php include "navbar.php" ?> <!-- end navigation -->

    <!-- Breadcrumbs -->
    <div class="container">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a href="index.html" class="breadcrumbs__url">Home</a>
        </li>
        <li class="breadcrumbs__item">
          <a href="index.html" class="breadcrumbs__url">News</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
          World
        </li>
      </ul>
    </div>

    <?php
    // Baca parameter id_kategori dari URL
    include "koneksi.php";
    $id_kategori = $_GET['kategori'];


    // Lakukan validasi atau keamanan jika diperlukan
    // ...

    // Query untuk mengambil berita berdasarkan id_kategori
    $query_berita_kategori = "SELECT * FROM `kategori` 
                         LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                         LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis 
                         WHERE kategori.id_kategori = $id_kategori";
    $sql_berita_kategori = mysqli_query($conn, $query_berita_kategori);

    // Tampilkan judul kategori di luar loop

    if ($result_kategori = mysqli_fetch_array($sql_berita_kategori)) {
      $nama_kategori = $result_kategori['nama_kategori'];
    ?>
      <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

          <!-- Posts -->
          <div class="col-lg-8 blog__content mb-72">
            <h1 class="page-title"><?php echo $nama_kategori ?></h1>
            <div class="row card-row">
              <?php
              // Mulai loop dari awal untuk membaca semua hasil
              do {
                $judul_berita = $result_kategori['judul_berita'];
                $nama_penulis = $result_kategori['nama_penulis'];
                $tanggal_publish = $result_kategori['tanggal_publish'];
                $gambar_berita = $result_kategori['gambar_berita'];
                $isi_berita = $result_kategori['isi_berita'];
                $id_berita = $result_kategori['id_berita'];
              ?>
                <div class="col-md-6">
                  <article class="entry card">
                    <div class="entry__img-holder card__img-holder">
                      <a href="single-post.php?berita=<?php echo $id_berita ?>">
                        <div class="thumb-container thumb-70">
                          <img data-src="img/berita/<?php echo $gambar_berita ?>" src="img/berita/<?php echo $gambar_berita ?>" class="entry__img lazyload" alt="" />
                        </div>
                      </a>
                      <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"><?php echo $nama_kategori ?></a>
                    </div>

                    <div class="entry__body card__body">
                      <div class="entry__header">
                        <h2 class="entry__title">
                          <a href="single-post.php?berita=<?php echo $id_berita ?>"><?php echo $judul_berita ?></a>
                        </h2>
                        <ul class="entry__meta">
                          <li class="entry__meta-author">
                            <span>by</span>
                            <a href="#"><?php echo $nama_penulis ?></a>
                          </li>
                          <li class="entry__meta-date">
                            <?php echo $tanggal_publish ?>
                          </li>
                        </ul>
                      </div>
                      <div class="entry__excerpt">
                        <p><?php echo $isi_berita ?></p>
                      </div>
                    </div>
                  </article>
                </div>
              <?php
              } while ($result_kategori = mysqli_fetch_array($sql_berita_kategori));
              ?>
            </div>

            <!-- Pagination -->
          </div> <!-- end posts -->

          <!-- Sidebar -->
          <aside class="col-lg-4 sidebar sidebar--right">

            <!-- Widget Popular Posts -->
            <aside class="widget widget-popular-posts">
              <h4 class="widget-title">Popular Posts</h4>
              <ul class="post-list-small">
                <li class="post-list-small__item">
                  <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                      <div class="thumb-container thumb-100">
                        <a href="single-post.php?berita=<?php echo $id_berita ?>">
                          <img data-src="img/content/post_small/post_small_1.jpg" src="img/empty.png" alt="" class=" lazyload">
                        </a>
                      </div>
                    </div>
                    <div class="post-list-small__body">
                      <h3 class="post-list-small__entry-title">
                        <a href="single-post.php?berita=<?php echo $id_berita ?>">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                      </h3>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <span>by</span>
                          <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                          Jan 21, 2018
                        </li>
                      </ul>
                    </div>
                  </article>
                </li>
                <li class="post-list-small__item">
                  <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                      <div class="thumb-container thumb-100">
                        <a href="single-post.php?berita=<?php echo $id_berita ?>">
                          <img data-src="img/content/post_small/post_small_2.jpg" src="img/empty.png" alt="" class=" lazyload">
                        </a>
                      </div>
                    </div>
                    <div class="post-list-small__body">
                      <h3 class="post-list-small__entry-title">
                        <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                      </h3>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <span>by</span>
                          <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                          Jan 21, 2018
                        </li>
                      </ul>
                    </div>
                  </article>
                </li>
                <li class="post-list-small__item">
                  <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                      <div class="thumb-container thumb-100">
                        <a href="single-post.html">
                          <img data-src="img/content/post_small/post_small_3.jpg" src="img/empty.png" alt="" class=" lazyload">
                        </a>
                      </div>
                    </div>
                    <div class="post-list-small__body">
                      <h3 class="post-list-small__entry-title">
                        <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                      </h3>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <span>by</span>
                          <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                          Jan 21, 2018
                        </li>
                      </ul>
                    </div>
                  </article>
                </li>
                <li class="post-list-small__item">
                  <article class="post-list-small__entry clearfix">
                    <div class="post-list-small__img-holder">
                      <div class="thumb-container thumb-100">
                        <a href="single-post.html">
                          <img data-src="img/content/post_small/post_small_4.jpg" src="img/empty.png" alt="" class=" lazyload">
                        </a>
                      </div>
                    </div>
                    <div class="post-list-small__body">
                      <h3 class="post-list-small__entry-title">
                        <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                      </h3>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <span>by</span>
                          <a href="#">DeoThemes</a>
                        </li>
                        <li class="entry__meta-date">
                          Jan 21, 2018
                        </li>
                      </ul>
                    </div>
                  </article>
                </li>
              </ul>
            </aside> <!-- end widget popular posts -->

            <!-- Widget Newsletter -->
            <aside class="widget widget_mc4wp_form_widget">
              <h4 class="widget-title">Newsletter</h4>
              <p class="newsletter__text">
                <i class="ui-email newsletter__icon"></i>
                Subscribe for our daily news
              </p>
              <form class="mc4wp-form" method="post">
                <div class="mc4wp-form-fields">
                  <div class="form-group">
                    <input type="email" name="EMAIL" placeholder="Your email" required="">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-color" value="Sign Up">
                  </div>
                </div>
              </form>
            </aside> <!-- end widget newsletter -->

            <!-- Widget Socials -->
            <aside class="widget widget-socials">
              <h4 class="widget-title">Let's hang out on social</h4>
              <div class="socials socials--wide socials--large">
                <div class="row row-16">
                  <div class="col">
                    <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                      <i class="ui-facebook"></i>
                      <span class="social__text">Facebook</span>
                    </a><!--
                  --><a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                      <i class="ui-twitter"></i>
                      <span class="social__text">Twitter</span>
                    </a><!--
                  --><a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
                      <i class="ui-youtube"></i>
                      <span class="social__text">Youtube</span>
                    </a>
                  </div>
                  <div class="col">
                    <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                      <i class="ui-google"></i>
                      <span class="social__text">Google+</span>
                    </a><!--
                  --><a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
                      <i class="ui-instagram"></i>
                      <span class="social__text">Instagram</span>
                    </a><!--
                  --><a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss">
                      <i class="ui-rss"></i>
                      <span class="social__text">Rss</span>
                    </a>
                  </div>
                </div>
              </div>
            </aside> <!-- end widget socials -->

          </aside> <!-- end sidebar -->

        </div> <!-- end content -->
      </div> <!-- end main container -->
    <?php
    }
    ?>

    <!-- Footer -->
    <?php include "footer.php" ?> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  <!-- jQuery Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/owl-carousel.min.js"></script>
  <script src="js/flickity.pkgd.min.js"></script>
  <script src="js/twitterFetcher_min.js"></script>
  <script src="js/jquery.newsTicker.min.js"></script>
  <script src="js/modernizr.min.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>