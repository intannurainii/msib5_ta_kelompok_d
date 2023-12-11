<?php
$curent_url = 'https://localhost.com' . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Single Post</title>

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
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- icon -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- icon -->


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
    <?php include "navbar.php";
    include "functions.php"

    ?> <!-- end navigation -->
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
                <?php
                if (isUserLoggedIn()) {
                  $id_customer = $_SESSION['kd_cs'];
                  // check liked
                  $query_cek_like = "SELECT id FROM like_berita WHERE id_customer = '$id_customer' AND id_berita = '$id_berita'";
                  $result_cek_like = mysqli_query($conn, $query_cek_like);
                  $isLiked = ($result_cek_like && $result_cek_like->num_rows > 0);
                  $query_hitung_like = "SELECT COUNT(*) AS hitung_like FROM like_berita WHERE id_berita = '$id_berita'";
                  $result_hitung_like = mysqli_query($conn, $query_hitung_like);
                  $total_like = ($result_hitung_like) ? $result_hitung_like->fetch_assoc()['hitung_like'] : 0;
                  // Assuming you have Boxicons loaded in your project
                  $likeIconClass = ($isLiked) ? 'bx bxs-heart' : 'bx bx-heart';

                  // check liked

                }
                ?>


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
                    <li class="like-view">
                      <div class="view">
                        <i class="ui-eye"></i>
                        <span><?php echo $views ?></span>
                      </div>
                      <?php if (isUserLoggedIn()) : ?>
                      <div class="like">
                          <i id='like-button' class='<?php echo $likeIconClass ?> ml-2'></i>
                          <span class='like-count'><?php echo $total_like ?></span>
                        </div>
                        <?php endif; ?>
                    </li>
                  </ul>
                </div>
              </div> <!-- end entry header -->

              <!-- script like -->
              <?php
              echo
              "<script>
                  $(document).ready(function() {
                    $('#like-button').click(function() {
                      const id_berita = $id_berita;
                      const button = $(this);

                      $.ajax({
                        type: 'POST',
                        url: 'like_berita.php',
                        data: {
                          id_berita: id_berita
                        },
                        success: function(response) {
                          // alert(response);
                          $('#like-button').toggleClass('bx-heart bxs-heart');

                          // Update the like count
                          updateLikeCount(id_berita);
                        },
                        error: function() {
                          alert('Error liking/unliking news.');
                        }
                      });
                    });

                    function updateLikeCount(id_berita) {
                      const likeCountElement = $('.like-count');
                      if (likeCountElement.length) {
                        $.ajax({
                          type: 'GET',
                          url: 'total_like_berita.php',
                          data: {
                            id_berita: id_berita
                          },
                          success: function(likeCount) {
                            likeCountElement.text(likeCount);
                          },
                          error: function() {
                            console.error('Error getting like count.');
                          }
                        });
                      }
                    }
                  });
                </script>"
              ?>
              <!-- script like -->

              <div class="entry__img-holder">
                <img src="img/berita/<?php echo $gambar_berita ?>" alt="" class="entry__img">
              </div>

              <div class="entry__article-wrap">

                <!-- Share -->
                <div class="entry__share">
                  <div class="sticky-col">
                    <div class="socials socials--rounded socials--large">
                      <a class="social social-facebook" id="shareFb" href="#" title="facebook" target="_blank" aria-label="facebook">
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
                    <!-- share fb -->
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v18.0&appId=342624831719798" nonce="49iQ42bj"></script>
                    <div class="fb-share-button" data-href="<?php echo $curent_url ?>" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan Yuk</a></div>
                    <!-- share fb -->
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
                      <form class="mc4wp-form" method="post" id="newsletterForm">
                        <div class="mc4wp-form-fields">
                          <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Your email" required="">
                          </div>
                          <div class="form-group">
                            <input type="submit" id="newsletter" name="newsletter" class="btn btn-lg btn-color" value="Sign Up">
                          </div>
                        </div>
                      </form>
                      <div id="notification"></div>
                    </div>
                  </div>
                </div>
              </div> <!-- end newsletter wide -->
              <!-- ajax -->
              <script src="https://code.jquery.com/jquery-3.6.4.min.js">
              </script>

              <script>
                $(document).ready(function() {
                  $('#newsletterForm').submit(function(e) {
                    e.preventDefault(); // Prevent the form from submitting in the traditional way

                    var email = $('#email').val();
                    var action = 'newsLetter';


                    $.ajax({
                      type: 'POST',
                      url: 'proses-input.php', // Change this to the actual processing file
                      data: {
                        email: email,
                        action: action
                      },
                      success: function(response) {
                        $('#notification').html(response).fadeIn();

                        // Munculkan notifikasi selama 5 detik, lalu hilangkan
                        setTimeout(function() {
                          $('#notification').fadeOut();
                        }, 3000);
                        $('#email').val('');
                      }
                    });
                  });
                });
              </script>
              <!-- ajax -->

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
            <div id="tampil">
              <div class="entry-comments" id="komen">
                <div class="title-wrap title-wrap--line" id="total_komen">
                  <?php
                  include 'koneksi.php';
                  $sql = "SELECT * FROM komen Where id_berita = $id_berita order by tgl desc";
                  $hasil = mysqli_query($conn, $sql);
                  $jumlah_komen = mysqli_num_rows($hasil);

                  ?>
                  <h3 class="section-title"><?php echo $jumlah_komen; ?> comments</h3>
                </div>
                <div id="komen-wrapper">
                  <?php
                  while ($result = mysqli_fetch_array($hasil)) {

                  ?>

                    <ul class="comment-list">
                      <li class="comment">
                        <div class="comment-body">
                          <div class="comment-avatar">
                            <img alt="" src="img/content/single/komen1.jpg" height="42" width="42">
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
                </div>
              </div> <!-- end comments -->
            </div>

            <!-- Comment Form -->
            <div id="respond" class="comment-respond">
              <div class="title-wrap">
                <h5 class="comment-respond__title section-title">Leave a Reply</h5>
              </div>
              <form id="formComment" class="comment-form" method="post">
                <p class="comment-form-comment">
                  <label for="comment">Comment</label>
                  <textarea id="comment" name="isi_komen" rows="5" required="required"></textarea>
                </p>

                <div class="row row-20">
                  <div class="col-lg-12">
                    <label for="name">Name: *</label>
                    <input name="nama" id="name-comment" type="text">
                  </div>
                  <div class="col-lg-4">
                  </div>
                </div>

                <p class="comment-form-submit">
                  <input type="submit" id="Submit" name="submit" class="btn btn-lg btn-color" value="Post a Comment">
                </p>
                <input name="id_berita" id="id_berita_comment" type="hidden" value="<?php echo $id_berita ?>">

              </form>
              <div id="notification-comment"></div>
            </div> <!-- end comment form -->
            <!-- ajax -->
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

            <script>
              $(document).ready(function() {
                $('#formComment').submit(function(e) {
                  e.preventDefault(); // Prevent the form from submitting in the traditional way

                  var isi_komen = $('#comment').val();
                  var nama = $('#name-comment').val();
                  var id_berita = $('#id_berita_comment').val();
                  var action = 'formComment';

                  $.ajax({
                    type: 'POST',
                    url: 'proses-input.php', // Change this to the actual processing file
                    data: {
                      isi_komen: isi_komen,
                      nama: nama,
                      id_berita: id_berita,
                      action: action
                    },
                    success: function(response) {
                      console.log(response.message);
                      console.log(response.komen);
                      $('#notification-comment').html(response.message).fadeIn();
                      $('#total_komen').html(response.total_komen).fadeIn();
                      $('#komen-wrapper').prepend(response.komen).fadeIn();

                      // Munculkan notifikasi selama 5 detik, lalu hilangkan
                      setTimeout(function() {
                        $('#notification-comment').fadeOut();
                      }, 30000);

                      $('#comment').val('');
                      $('#name-comment').val('');
                    }
                  });
                });
              });
            </script>
            <!-- ajax -->

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
  <script src="social-share.js"></script>

</body>

</html>