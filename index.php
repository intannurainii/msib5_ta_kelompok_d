<?php include "koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Deus | Home 1 Default</title>

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

    </div>
    </div>
    </div> <!-- end top bar -->

    <!-- Navigation -->
    <?php include "navbar.php" ?>
    <!-- function background kategori -->
    <?php

    include "BgColorByCategory.php";
    ?>
    <!-- function background kategori -->
    <!-- end navigation -->


    <!-- Trending Now -->
    <div class="container">
      <div class="trending-now">
        <span class="trending-now__label">
          <i class="ui-flash"></i>
          <span class="trending-now__text d-lg-inline-block d-none">Newsflash</span>
        </span>
        <div class="newsticker">
          <ul class="newsticker__list">
            <?php
            $query = "SELECT * FROM `berita` ORDER BY berita.tanggal_publish DESC";
            $sql = mysqli_query($conn, $query);
            while ($result = mysqli_fetch_array($sql)) {
              $judul_berita = $result['judul_berita'];
              $id_berita = $result['id_berita'];

            ?>
              <li class="newsticker__item"><a href="single-post.php?berita=<?php echo $id_berita ?>" class="newsticker__item-url"><?php echo $judul_berita ?></a></li>

            <?php
            };
            ?>
          </ul>
        </div>
        <div class="newsticker-buttons">
          <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
          <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
        </div>
      </div>
    </div>

    <!-- Featured Posts Grid -->
    <section class="featured-posts-grid">
      <div class="container">
        <div class="row row-8">

          <div class="col-lg-6">
            <!-- Small post -->
            <?php
            $query_berita = "SELECT * FROM `kategori` 
                     LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                     LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis ORDER BY views DESC limit 3 offset 1";
            $sql_berita = mysqli_query($conn, $query_berita);
            while ($result_berita = mysqli_fetch_array($sql_berita)) {
              $id_kategori = $result_berita['id_kategori'];
              $id_berita = $result_berita['id_berita'];
              $id_penulis = $result_berita['id_penulis'];
              $judul_berita = $result_berita['judul_berita'];
              $nama_kategori = $result_berita['nama_kategori'];
              $nama_penulis = $result_berita['nama_penulis'];
              $tanggal_publish = $result_berita['tanggal_publish'];
              $gambar_berita = $result_berita['gambar_berita'];
              $isi_berita = $result_berita['isi_berita'];

            ?>
              <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                <article class="entry card post-list featured-posts-grid__entry">
                  <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/berita/<?php echo $gambar_berita ?>)">
                    <a href="single-post.php?berita=<?php echo $id_berita ?>" class="thumb-url"></a>
                    <img src="img/content/hero/hero_post_1.jpg" alt="" class="entry__img d-none">
                    <a href="categories.php?kategori=<?php echo $id_kategori ?>" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php echo getBgColorByCategory($nama_kategori) ?>"><?php echo $nama_kategori ?></a>
                  </div>

                  <div class="entry__body post-list__body card__body">
                    <h2 class="entry__title">
                      <a href="single-post.php?berita=<?php echo $id_berita ?>"><?php echo $judul_berita ?></a>
                    </h2>
                    <ul class="entry__meta">
                      <li class="entry__meta-author">
                        <span>by</span>
                        <a href="authors.php?penulis=<?php echo $id_penulis ?>"><?php echo $nama_penulis ?></a>
                      </li>
                      <li class="entry__meta-date">
                        <?php echo $tanggal_publish ?>
                      </li>
                    </ul>
                  </div>
                </article>
              </div> <!-- end post -->
            <?php
            };
            ?>
          </div> <!-- end col -->
          <div class="col-lg-6">

            <!-- Large post -->
            <?php
            $query_berita = "SELECT * FROM `kategori` 
                     LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                     LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis ORDER BY views DESC  limit 1";
            $sql_berita = mysqli_query($conn, $query_berita);
            $result_berita = mysqli_fetch_array($sql_berita);
            $id_kategori = $result_berita['id_kategori'];
            $judul_berita = $result_berita['judul_berita'];
            $nama_kategori = $result_berita['nama_kategori'];
            $nama_penulis = $result_berita['nama_penulis'];
            $id_penulis = $result_berita['id_penulis'];
            $tanggal_publish = $result_berita['tanggal_publish'];
            $gambar_berita = $result_berita['gambar_berita'];
            $isi_berita = $result_berita['isi_berita'];
            $id_berita = $result_berita['id_berita'];

            ?>
            <div class="featured-posts-grid__item featured-posts-grid__item--lg">
              <article class="entry card featured-posts-grid__entry">
                <div class="entry__img-holder card__img-holder">
                  <a href="single-post.php?berita=<?php echo $id_berita ?>">
                    <img src="img/berita/<?php echo $gambar_berita ?>" alt="" class="entry__img">
                  </a>
                  <a href="categories.php?id_kategori=<?php echo $id_kategori ?>" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php echo getBgColorByCategory($nama_kategori) ?>"><?php echo $nama_kategori ?></a>
                </div>

                <div class="entry__body card__body">
                  <h2 class="entry__title">
                    <a href="single-post.php?berita=<?php echo $id_berita ?>"><?php echo $judul_berita ?></a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="authors.php?penulis=<?php echo $id_penulis ?>"><?php echo $nama_penulis ?></a>
                    </li>
                    <li class="entry__meta-date">
                      <?php echo $tanggal_publish ?>
                    </li>
                  </ul>
                </div>
              </article>
            </div> <!-- end large post -->
          </div>

        </div>
      </div>
    </section> <!-- end featured posts grid -->

    <div class="main-container container pt-24" id="main-container">

      <!-- Content -->
      <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content">

          <!-- Latest News -->
          <section class="section tab-post mb-16">
            <div class="title-wrap title-wrap--line">
              <h3 class="section-title">Latest News</h3>

              <div class="tabs tab-post__tabs">
                <ul class="tabs__list">
                  <li class="tabs__item tabs__item--active">
                    <a href="#tab-all" class="tabs__trigger">All</a>
                  </li>
                  <!-- Kategori From Database -->
                  <?php
                  $query = "SELECT * FROM `kategori`";
                  $sql = mysqli_query($conn, $query);
                  while ($result = mysqli_fetch_array($sql)) {
                    $nama_kategori = $result['nama_kategori'];

                  ?>
                    <li class="tabs__item">
                      <a href="#tab-<?php echo $nama_kategori ?>" class="tabs__trigger"><?php echo $nama_kategori ?></a>
                    </li>
                  <?php
                  };
                  ?>
                  <!-- Kategori From Database -->
                </ul> <!-- end tabs -->
              </div>
            </div>

            <!-- tab content -->
            <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

              <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                <div class="row card-row">
                  <?php
                  $query_berita = "SELECT * FROM `kategori` 
                     LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                     LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis ORDER BY berita.tanggal_publish DESC limit 6";
                  $sql_berita = mysqli_query($conn, $query_berita);
                  while ($result_berita = mysqli_fetch_array($sql_berita)) {
                    $judul_berita = $result_berita['judul_berita'];
                    $nama_kategori = $result_berita['nama_kategori'];
                    $nama_penulis = $result_berita['nama_penulis'];
                    $id_penulis = $result_berita['id_penulis'];
                    $tanggal_publish = $result_berita['tanggal_publish'];
                    $gambar_berita = $result_berita['gambar_berita'];
                    $isi_berita = $result_berita['isi_berita'];
                    $id_berita = $result_berita['id_berita'];
                    $id_kategori = $result_berita['id_kategori']
                  ?>
                    <div class="col-md-6">
                      <article class="entry card">
                        <div class="entry__img-holder card__img-holder">
                          <a href="single-post.php?berita=<?php echo $id_berita ?>">
                            <div class="thumb-container thumb-70">
                              <img data-src="img/berita/<?php echo $gambar_berita ?>" src="img/berita/<?php echo $gambar_berita ?>" class="entry__img lazyload" alt="" />
                            </div>
                          </a>
                          <a href="categories.php?kategori=<?php echo $id_kategori ?>" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php echo getBgColorByCategory($nama_kategori) ?>"><?php echo $nama_kategori ?></a>
                        </div>

                        <div class="entry__body card__body">
                          <div class="entry__header">

                            <h2 class="entry__title">
                              <a href="single-post.php?berita=<?php echo $id_berita ?>"><?php echo $judul_berita ?></a>
                            </h2>
                            <ul class="entry__meta">
                              <li class="entry__meta-author">
                                <span>by</span>
                                <a href="authors.php?penulis=<?php echo $id_penulis ?>"><?php echo $nama_penulis ?></a>
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
                  }
                  ?>
                </div>
              </div> <!-- end pane 1 -->
              <!-- Kategori From Database -->
              <?php
              $query = "SELECT * FROM `kategori`";
              $sql = mysqli_query($conn, $query);
              while ($result = mysqli_fetch_array($sql)) {
                $nama_kategori_group = $result['nama_kategori'];
              ?>
                <div class="tabs__content-pane" id="tab-<?php echo $nama_kategori_group ?>">
                  <div class="row card-row">
                    <?php
                    $query_berita = "SELECT * FROM `kategori` 
                     LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                     LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis 
                     WHERE kategori.nama_kategori = '$nama_kategori_group' ORDER BY berita.tanggal_publish DESC limit 6";
                    $sql_berita = mysqli_query($conn, $query_berita);
                    while ($result_berita = mysqli_fetch_array($sql_berita)) {
                      $judul_berita = $result_berita['judul_berita'];
                      $nama_kategori = $result_berita['nama_kategori'];
                      $nama_penulis = $result_berita['nama_penulis'];
                      $id_penulis = $result_berita['id_penulis'];
                      $tanggal_publish = $result_berita['tanggal_publish'];
                      $gambar_berita = $result_berita['gambar_berita'];
                      $isi_berita = $result_berita['isi_berita'];
                      $id_berita = $result_berita['id_berita'];
                      $id_kategori = $result_berita['id_kategori']
                    ?>
                      <div class="col-md-6">
                        <article class="entry card">
                          <div class="entry__img-holder card__img-holder">
                            <a href="single-post.php?berita=<?php echo $id_berita ?>">
                              <div class="thumb-container thumb-70">
                                <img data-src="img/berita/<?php echo $gambar_berita ?>" src="img/berita/<?php echo $gambar_berita ?>" class="entry__img lazyload" alt="" />
                              </div>
                            </a>
                            <a href="categories.php?kategori=<?php echo $id_kategori ?>" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php echo getBgColorByCategory($nama_kategori) ?>"><?php echo $nama_kategori ?></a>
                          </div>
                          <div class="entry__body card__body">
                            <div class="entry__header">
                              <h2 class="entry__title">
                                <a href="single-post.php?berita=<?php echo $id_berita ?>"><?php echo $judul_berita ?></a>
                              </h2>
                              <ul class="entry__meta">
                                <li class="entry__meta-author">
                                  <span>by</span>
                                  <a href="authors.php?penulis=<?php echo $id_penulis ?>"><?php echo $nama_penulis ?></a>
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
                    }
                    ?>
                  </div>
                </div>
                <!-- end pane for current category -->
              <?php
              }
              ?>
            </div> <!-- end tab content -->
          </section> <!-- end latest news -->

        </div> <!-- end posts -->

        <!-- Sidebar -->
        <aside class="col-lg-4 sidebar sidebar--right">
          <?php include "sidebar.php" ?>
        </aside> <!-- end sidebar -->

      </div> <!-- end content -->



      <!-- Carousel posts -->
      <section class="section mb-0">
        <div class="title-wrap title-wrap--line title-wrap--pr">
          <h3 class="section-title">editors picks</h3>
        </div>

        <!-- Slider -->
        <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
          <?php
          $query_berita = "SELECT * FROM `berita` WHERE `editors_picks` = 1 ORDER BY berita.tanggal_publish DESC";
          $sql_berita = mysqli_query($conn, $query_berita);
          while ($result_berita = mysqli_fetch_array($sql_berita)) {
            $judul_berita = $result_berita['judul_berita'];
            $gambar_berita = $result_berita['gambar_berita'];
            $id_berita = $result_berita['id_berita']
          ?>
            <article class="entry thumb thumb--size-1">
              <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/berita/<?php echo $gambar_berita ?>');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">
                  <h2 class="thumb-entry-title">
                    <a href="single-post.php?berita=<?php echo $id_berita ?>"><?php echo $judul_berita ?></a>
                  </h2>
                </div>
                <a href="single-post.php?berita=<?php echo $id_berita ?>" class="thumb-url"></a>
              </div>
            </article>
          <?php
          }
          ?>
        </div> <!-- end slider -->

      </section> <!-- end carousel posts -->

      <!-- Posts from categories -->
      <section class="section mb-0">
        <div class="row">

          <!-- Technology -->
          <?php
          $query = "SELECT * FROM `kategori`";
          $sql = mysqli_query($conn, $query);
          while ($result = mysqli_fetch_array($sql)) {
            $nama_kategori_group = $result['nama_kategori'];
          ?>
            <div class="col-md-6">
              <div class="title-wrap title-wrap--line">
                <h3 class="section-title"><?php echo $nama_kategori_group ?></h3>
              </div>

              <?php
              $query_berita = "SELECT * FROM `kategori` 
                     LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                     LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis 
                     WHERE kategori.nama_kategori = '$nama_kategori_group' ORDER BY berita.tanggal_publish DESC";
              $sql_berita = mysqli_query($conn, $query_berita);
              $result_berita = mysqli_fetch_array($sql_berita);
              $judul_berita = $result_berita['judul_berita'];
              $nama_penulis = $result_berita['nama_penulis'];
            $id_penulis = $result_berita['id_penulis'];
              $tanggal_publish = $result_berita['tanggal_publish'];
              $gambar_berita = $result_berita['gambar_berita'];
              $id_berita = $result_berita['id_berita'];
              ?>
              <div class="row">
                <div class="col-lg-6">
                  <article class="entry thumb thumb--size-2">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/berita/<?php echo $gambar_berita ?>');">
                      <div class="bottom-gradient"></div>
                      <div class="thumb-text-holder thumb-text-holder--1">
                        <h2 class="thumb-entry-title">
                          <a href="single-post.php?berita=<?php echo $id_berita ?>"><?php echo $judul_berita ?></a>
                        </h2>
                        <ul class="entry__meta">
                          <li class="entry__meta-author">
                            <span>by</span>
                            <a href="authors.php?penulis=<?php echo $id_penulis ?>"><?php echo $nama_penulis ?></a>
                          </li>
                          <li class="entry__meta-date">
                            <?php echo $tanggal_publish ?>
                          </li>
                        </ul>
                      </div>
                      <a href="single-post.php?berita=<?php echo $id_berita ?>" class="thumb-url"></a>
                    </div>
                  </article>
                </div>
                <div class="col-lg-6">
                  <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
                    <?php
                    $query_berita = "SELECT * FROM `kategori` 
                     LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                     WHERE kategori.nama_kategori = '$nama_kategori_group' ORDER BY berita.tanggal_publish DESC limit 5 offset 1";
                    $sql_berita = mysqli_query($conn, $query_berita);
                    while ($result_berita = mysqli_fetch_array($sql_berita)) {
                      $judul_berita = $result_berita['judul_berita'];
                      $id_berita = $result_berita['id_berita'];
                    ?>
                      <li class="post-list-small__item">
                        <article class="post-list-small__entry">
                          <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                              <a href="single-post.php?berita=<?php echo $id_berita ?>"><?php echo $judul_berita ?></a>
                            </h3>
                          </div>
                        </article>
                      </li>
                    <?php }
                    ?>
                  </ul>
                </div>
              </div>
            </div> <!-- end technology -->
          <?php
          }
          ?>

        </div>
      </section> <!-- end posts from categories -->
      <!-- Posts from categories -->


    </div> <!-- end main container -->

    <!-- Footer -->
    <div class="pt-5">
      <?php include "footer.php" ?>
    </div>
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
  <script src="js/jquery.newsTicker.min.js"></script>
  <script src="js/modernizr.min.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>