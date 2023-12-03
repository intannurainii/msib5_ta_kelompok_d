        <?php
        $query_berita = "SELECT * FROM `kategori` 
                     LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                     LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis 
                     ORDER BY views DESC limit 5";
        $sql_berita = mysqli_query($conn, $query_berita);
        ?>

        <aside class="widget widget-popular-posts">
            <h4 class="widget-title">Popular Posts</h4>
            <ul class="post-list-small">
                <?php
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
                                    <a href="single-post.php?berita=<?php echo $id_berita ?>">
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
                <?php }
                ?>
            </ul>
        </aside>
        <!-- Widget Newsletter -->
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
        </aside> <!-- end widget newsletter -->

        <!-- Widget Socials -->
        <aside class="widget widget-socials">
            <h4 class="widget-title">Let's hang out on social</h4>
            <div class="socials socials--wide socials--large">
                <div class="row row-16">
                    <div class="col">
                        <a class="social social-facebook" href="https://www.facebook.com/detikcom/" title="facebook" target="_blank" aria-label="facebook">
                            <i class="ui-facebook"></i>
                            <span class="social__text">Facebook</span>
                        </a>
                        <a class="social social-instagram" href="https://www.instagram.com/detikcom" title="instagram" target="_blank" aria-label="instagram">
                            <i class="ui-instagram"></i>
                            <span class="social__text">Instagram</span>
                        </a>


                    </div>
                    <div class="col">
                        <a class="social social-youtube" href="https://www.youtube.com/@detikcom" title="youtube" target="_blank" aria-label="youtube">
                            <i class="ui-youtube"></i>
                            <span class="social__text">Youtube</span>
                        </a>
                        <a class="social social-twitter" href="https://twitter.com/detikcom" title="twitter" target="_blank" aria-label="twitter">
                            <i class="ui-twitter"></i>
                            <span class="social__text">Twitter</span>
                        </a>

                    </div>
                </div>
            </div>
        </aside> <!-- end widget socials -->
        <!-- Sidebar 1 -->


        <!-- Widget Categories -->
        <aside class="widget widget_categories">
            <h4 class="widget-title">Categories</h4>
            <ul>
                <!-- Kategori From Database -->
                <?php
                $query = "SELECT kategori.id_kategori, kategori.nama_kategori, COUNT(berita.id_berita) AS jumlah_berita
              FROM kategori
              LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori
              GROUP BY kategori.id_kategori, kategori.nama_kategori;
              ";
                $sql = mysqli_query($conn, $query);
                while ($result = mysqli_fetch_array($sql)) {
                    $nama_kategori = $result['nama_kategori'];
                    $jumlah_berita = $result['jumlah_berita'];
                    $id_kategori = $result['id_kategori'];

                ?>
                    <li><a href="categories.php?kategori=<?php echo $id_kategori ?>"><?php echo $nama_kategori ?> <span class="categories-count"><?php echo $jumlah_berita ?></span></a></li>

                <?php
                };
                ?>
                <!-- Kategori From Database -->
            </ul>
        </aside> <!-- end widget categories -->