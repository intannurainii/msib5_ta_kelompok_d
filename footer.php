    <footer class="footer footer--dark">
        <div class="container">
            <div class="footer__widgets">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <aside class="widget widget-logo">
                            <a href="index.html">
                                <img src="img/logo_default_white.png" srcset="img/logo_default_white.png 1x, img/logo_default_white@2x.png 2x" class="logo__img" alt="">
                            </a>
                            <p class="copyright">
                                &copy; <script>
                                    document.querySelector(".copyright").innerHTML += new Date().getFullYear();
                                </script> Deus | Made by <a href="https://deothemes.com">DeoThemes</a>
                            </p>
                            <div class="socials socials--large socials--rounded mb-24">
                                <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                                <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                                <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                                <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                                <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                            </div>
                        </aside>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <aside class="widget widget_nav_menu">
                            <h4 class="widget-title">Useful Links</h4>
                            <ul>
                                <li><a href="about.php">About</a></li>
                                <li><a href="index.php">News</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <aside class="widget widget-popular-posts">
                            <h4 class="widget-title">Popular Posts</h4>
                            <ul class="post-list-small">
                                <?php
                                include "koneksi.php";
                                $query_berita = "SELECT * FROM `berita`
                     LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis 
                     ORDER BY views DESC limit 2";
                                $sql_berita = mysqli_query($conn, $query_berita);
                                while ($result_berita = mysqli_fetch_array($sql_berita)) {
                                    $judul_berita = $result_berita['judul_berita'];
                                    $gambar_berita = $result_berita['gambar_berita'];
                                    $id_berita = $result_berita['id_berita'];
                                    $nama_penulis = $result_berita['nama_penulis'];
                                    $id_penulis = $result_berita['id_penulis'];
                                    $tanggal_publish = $result_berita['tanggal_publish'];
                                ?>
                                    <li class="post-list-small__item">
                                        <article class="post-list-small__entry clearfix">
                                            <div class="post-list-small__img-holder">
                                                <div class="thumb-container thumb-100">
                                                    <a href="single-post.html">
                                                        <img data-src="img/berita/<?php echo $gambar_berita ?>" src="img/berita/<?php echo $gambar_berita ?>" alt="" class="post-list-small__img--rounded lazyload">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-list-small__body">
                                                <h3 class="post-list-small__entry-title">
                                                    <a href="single-post.php?berita=<?php echo $id_berita ?>"><?php echo $judul_berita ?></a>
                                                </h3>
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
                                    </li>
                                <?php
                                }
                                ?>
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
                        </aside>
                    </div>

                </div>
            </div>
        </div> <!-- end container -->
    </footer>