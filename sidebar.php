        <?php
                $query_berita = "SELECT * FROM `kategori` 
                     LEFT JOIN berita ON kategori.id_kategori = berita.id_kategori 
                     LEFT JOIN penulis ON berita.id_penulis = penulis.id_penulis 
                     ORDER BY berita.tanggal_publish DESC ";
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
                    $tanggal_publish = $result_berita['tanggal_publish'];
                ?>
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry clearfix">
                            <div class="post-list-small__img-holder">
                                <div class="thumb-container thumb-100">
                                    <a href="single-post.php?berita=<?php echo $id_berita ?>">
                                        <img data-src="img/berita/<?php echo $gambar_berita ?>" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
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
                                        <a href="#"><?php echo $nama_penulis ?></a>
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