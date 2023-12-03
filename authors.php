<!DOCTYPE html>
<html lang="en">

<head>
  <title>Deus | Authors
  </title>

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
    <?php

    include "BgColorByCategory.php";
    ?>

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
    $id_penulis = $_GET['penulis'];


    // Lakukan validasi atau keamanan jika diperlukan
    // ...

    // Query untuk mengambil berita berdasarkan id_kategori
    $query_berita_kategori = "SELECT * FROM `kategori` 
                         LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                         LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis 
                         WHERE penulis.id_penulis = $id_penulis";
    $sql_berita_kategori = mysqli_query($conn, $query_berita_kategori);

    // Tampilkan judul kategori di luar loop

    if ($result_kategori = mysqli_fetch_array($sql_berita_kategori)) {
      $nama_penulis = $result_kategori['nama_penulis'];
    ?>
      <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

          <!-- Posts -->
          <div class="col-lg-8 blog__content mb-72">
            <h1 class="page-title">Post by <?php echo $nama_penulis?></h1>
            <div class="row card-row">
              <?php
              // Mulai loop dari awal untuk membaca semua hasil
              do {
                $judul_berita = $result_kategori['judul_berita'];
                $nama_penulis = $result_kategori['nama_penulis'];
                $nama_kategori = $result_kategori['nama_kategori'];
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
                      <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--<?php echo getBgColorByCategory($nama_kategori) ?>"><?php echo $nama_kategori ?></a>
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
            <?php include "sidebar.php" ?>
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