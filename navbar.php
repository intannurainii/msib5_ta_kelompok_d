    <header class="nav">
        <div class="nav__holder nav--sticky">
            <div class="container relative">
                <div class="flex-parent">

                    <!-- Logo -->
                    <a href="index.html" class="logo">
                        <img class="logo__img" src="img/logo_default.png" srcset="img/logo_default.png 1x, img/logo_default@2x.png 2x" alt="logo" />
                    </a>

                    <!-- Nav-wrap -->
                    <nav class="flex-child nav__wrap d-none d-lg-block">
                        <ul class="nav__menu">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="nav__dropdown">
                                <a href="#">Categories</a>
                                <ul class="nav__dropdown-menu">
                                    <?php
                                    include "koneksi.php";
                                    $query = "SELECT * FROM kategori";
                                    $sql = mysqli_query($conn, $query);
                                    while ($result = mysqli_fetch_array($sql)) {
                                        $nama_kategori = $result['nama_kategori'];
                                        $id_kategori = $result['id_kategori'];

                                    ?>
                                        <li><a href="categories.php?kategori=<?php echo $id_kategori ?>"><?php echo $nama_kategori ?></a></li>

                                    <?php
                                    };
                                    ?>
                                </ul>
                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>

                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                        <!-- end menu -->
                    </nav>
                    <!-- end nav-wrap -->


                </div>
                <!-- end flex-parent -->
            </div>
            <!-- end container -->
        </div>
    </header>