<!DOCTYPE html>
<html lang="en">

<head>
  <title>Deus | Single Post</title>

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

<body class="bg-light single-post style-default style-rounded">

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
    <?php

    include "BgColorByCategory.php";
    ?>
    <?php
    // Baca parameter id_kategori dari URL
    include "koneksi.php";
    $id_berita = $_GET['berita'];
    mysqli_query($conn, "UPDATE berita SET views = views + 1 WHERE id_berita = $id_berita");


    // Lakukan validasi atau keamanan jika diperlukan
    // ...

    // Query untuk mengambil berita berdasarkan id_kategori
    $query_berita = "SELECT * FROM `kategori` 
                         LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                         LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis 
                         WHERE berita.id_berita = $id_berita";
    $sql_berita = mysqli_query($conn, $query_berita);
    $result_berita = mysqli_fetch_array($sql_berita);
    $id_kategori = $result_berita['id_kategori'];
    $nama_kategori = $result_berita['nama_kategori'];
    $judul_berita = $result_berita['judul_berita'];
    $nama_penulis = $result_berita['nama_penulis'];
    $id_penulis = $result_berita['id_penulis'];
    $tanggal_publish = $result_berita['tanggal_publish'];
    $gambar_berita = $result_berita['gambar_berita'];
    $isi_berita = $result_berita['isi_berita'];
    $foto_penulis = $result_berita['foto_profil'];
    $email_penulis = $result_berita['email_penulis'];
    $views = $result_berita['views'];
    // Tampilkan judul kategori di luar loop

    $query_related =
      "SELECT * FROM `kategori` 
                         LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                         LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis 
                         WHERE berita.id_kategori = $id_kategori";
    $sql_related = mysqli_query($conn, $query_related);

    ?>

    <!-- Breadcrumbs -->
    <div class="container">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a href="index.php" class="breadcrumbs__url">Home</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
          <a href="categories.php?kategori=<?php echo $id_kategori ?>" class="breadcrumbs__url"><?php echo $nama_kategori ?></a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
          <?php echo $judul_berita ?>
        </li>
      </ul>
    </div>
    <div class="main-container container" id="main-container">

      <!-- Content -->
      <div class="row">

        <!-- post content -->
        <div class="col-lg-8 blog__content mb-72">
          <div class="content-box">

            <!-- standard post -->
            <article class="entry mb-0">

              <div class="single-post__entry-header entry__header">
                <a href="categories.php?kategori=<?php echo $id_kategori ?>" class="entry__meta-category entry__meta-category--label entry__meta-category--<?php echo getBgColorByCategory($nama_kategori) ?>"><?php echo $nama_kategori ?></a>
                <h1 class="single-post__entry-title">
                  <?php echo $judul_berita ?>
                </h1>

                <div class="entry__meta-holder">
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="authors.php?penulis=<?php echo $id_penulis ?>"><?php echo $nama_penulis ?></a>
                    </li>
                    <li class="entry__meta-date">
                      <?php echo $tanggal_publish ?>
                    </li>
                  </ul>

                  <ul class="entry__meta">
                    <li class="entry__meta-views">
                      <i class="ui-eye"></i>
                      <span><?php echo $views ?></span>
                    </li>
                  </ul>
                </div>
              </div> <!-- end entry header -->

              <div class="entry__img-holder">
                <img src="img/berita/<?php echo $gambar_berita ?>" alt="" class="entry__img">
              </div>

              <div class="entry__article-wrap">

                <!-- Share -->
                <div class="entry__share">
                  <div class="sticky-col">
                    <div class="socials socials--rounded socials--large">
                      <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                        <i class="ui-facebook"></i>
                      </a>
                      <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                        <i class="ui-twitter"></i>
                      </a>
                      <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                        <i class="ui-google"></i>
                      </a>
                      <a class="social social-pinterest" href="#" title="pinterest" target="_blank" aria-label="pinterest">
                        <i class="ui-pinterest"></i>
                      </a>
                    </div>
                  </div>
                </div> <!-- share -->

                <div class="entry__article">
                  <p>
                    <?php echo $isi_berita ?>
                  </p>

                </div> <!-- end entry article -->
              </div> <!-- end entry article wrap -->


              <!-- Newsletter Wide -->
              <div class="newsletter-wide">
                <div class="widget widget_mc4wp_form_widget">
                  <div class="newsletter-wide__container">
                    <div class="newsletter-wide__text-holder">
                      <p class="newsletter-wide__text">
                        <i class="ui-email newsletter__icon"></i>
                        Subscribe for our daily news
                      </p>
                    </div>
                    <div class="newsletter-wide__form">
                      <form class="mc4wp-form" method="post" action="proses-input.php">
                        <div class="mc4wp-form-fields">
                          <div class="form-group">
                            <input type="email" name="email" placeholder="Your email" required="">
                          </div>
                          <div class="form-group">
                            <input type="submit" id="newsletter" name="newsletter" class="btn btn-lg btn-color" value="Sign Up">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div> <!-- end newsletter wide -->

              <!-- Author -->
              <div class="entry-author clearfix">
                <img alt="" data-src="img/berita/<?php echo $foto_penulis ?>" src="img/berita/<?php echo $foto_penulis ?>" class="avatar lazyload" width="80px" height="80px">
                <div class=" entry-author__info">
                  <h6 class="entry-author__name">
                    <a href="authors.php?penulis=<?php echo $id_penulis ?>"><?php echo $nama_penulis ?></a>
                  </h6>
                  <p class="mb-0"><?php echo $email_penulis ?></p>
                </div>
              </div>

              <!-- Related Posts -->
              <section class="section related-posts mt-40 mb-0">
                <div class="title-wrap title-wrap--line title-wrap--pr">
                  <h3 class="section-title">Related Articles</h3>
                </div>

                <!-- Slider -->
                <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                  <?php
                  while ($result_related = mysqli_fetch_array($sql_related)) {
                    $judul_berita_related = $result_related['judul_berita'];
                    $gambar_berita_related = $result_related['gambar_berita'];
                    $id_berita_related = $result_related['id_berita'];
                  ?>
                    <article class="entry thumb thumb--size-1">
                      <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/berita/<?php echo $gambar_berita_related ?>');">
                        <div class="bottom-gradient"></div>
                        <div class="thumb-text-holder">
                          <h2 class="thumb-entry-title">
                            <a href="single-post.php?berita=<?php echo $id_berita_related ?>"><?php echo $judul_berita_related ?></a>
                          </h2>
                        </div>
                        <a href="single-post.php?berita=<?php echo $id_berita_related ?>" class="thumb-url"></a>
                      </div>
                    </article>
                  <?php
                  }
                  ?>
                </div> <!-- end slider -->

              </section> <!-- end related posts -->

            </article> <!-- end standard post -->

            <!-- Comments -->
            <div class="entry-comments">
              <div class="title-wrap title-wrap--line">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM komen Where id_berita = $id_berita ");
                $data_komen = mysqli_query($conn, "SELECT * FROM komen where id_berita=$id_berita");
                $jumlah_komen = mysqli_num_rows($data_komen);
                ?>
                <h3 class="section-title"><?php echo $jumlah_komen; ?> comments</h3>
              </div>
              <?php
              while ($result = mysqli_fetch_array($query)) {
              ?>
                <ul class="comment-list">
                  <li class="comment">
                    <div class="comment-body">
                      <div class="comment-avatar">
                        <img alt="" src="img/content/single/komen1.jpg"height="42" width="42">
                      </div>
                      <div class="comment-text">
                        <h6 class="comment-author">
                          <p><?= $result['nama']; ?></p>
                        </h6>
                        <div class="comment-metadata">
                          <a href="#" class="comment-date"><?= $result['tgl']; ?></a>
                        </div>
                        <p><?php echo $result['isi_komen']; ?></p>
                      </div>
                    </div>
                  </li>
                </ul>
              <?php
              }
              ?>
            </div> <!-- end comments -->

            <!-- Comment Form -->
            <div id="respond" class="comment-respond">
              <div class="title-wrap">
                <h5 class="comment-respond__title section-title">Leave a Reply</h5>
              </div>
              <form id="form" class="comment-form" method="post" action="proses-input.php">
                <p class="comment-form-comment">
                  <label for="comment">Comment</label>
                  <textarea id="comment" name="isi_komen" rows="5" required="required"></textarea>
                </p>

                <div class="row row-20">
                  <input name="id_berita" type="hidden" value="<?php echo $id_berita ?>">
                  <div class="col-lg-4">
                    <label for="name">Name: *</label>
                    <input name="nama" id="name" type="text">
                  </div>
                  <div class="col-lg-4">
                  </div>
                </div>

                <p class="comment-form-submit">
                  <input type="submit" id="komen" name="komen" class="btn btn-lg btn-color" value="Post a Comment">
                </p>

              </form>
            </div> <!-- end comment form -->


          </div> <!-- end content box -->
        </div> <!-- end post content -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">
          <?php include "sidebar.php" ?>
        </aside> <!-- end sidebar -->

      </div> <!-- end content -->
    </div> <!-- end main container -->

    <!-- Footer -->
    <?php include "footer.php" ?>
    <!-- end footer -->

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
  <script src="js/jquery.sticky-kit.min.js"></script>
  <script src="js/jquery.newsTicker.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/modernizr.min.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>