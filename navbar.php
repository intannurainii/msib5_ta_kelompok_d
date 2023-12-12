

<?php
$currentPage = basename($_SERVER['SCRIPT_FILENAME'], '.php');
?>
<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['kd_cs'])) {

    $kode_cs = $_SESSION['kd_cs'];
}
?>
<header class="nav">
    <div class="nav__holder nav--sticky">
        <div class="container relative">
            <div class="flex-parent">

                <!-- Logo -->
                <a href="index.php" class="logo">
                    <img class="logo__img" src="img/logo_default.png" srcset="img/logo_default.png 1x, img/logo_default@2x.png 2x" alt="logo" width="140px" />
                </a>

                <!-- Nav-wrap -->
                <nav class="flex-child nav__wrap d-none d-lg-flex justify-content-between">
                    <ul class="nav__menu">
                        <li <?php echo ($currentPage == 'index') ? 'class="active"' : ''; ?>>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="nav__dropdown <?php echo ($currentPage == 'categories') ? 'active' : ''; ?>">
                            <a href="#">Categories</a>
                            <ul class="nav__dropdown-menu">
                                <?php
                                include "koneksi.php";
                                $query = "SELECT * FROM kategori";
                                $sql = mysqli_query($conn, $query);
                                while ($result = mysqli_fetch_array($sql)) {
                                    $menu_kategori = $result['nama_kategori'];
                                    $id_kategori = $result['id_kategori'];
                                ?>
                                    <?php echo ($currentPage !== 'categories') ? ($currentCategories = "") : ''; ?>
                                    <li <?php echo ($currentCategories == $menu_kategori) ? 'class="active"' : ''; ?>><a href="categories.php?kategori=<?php echo $id_kategori ?>"><?php echo $menu_kategori ?></a></li>

                                <?php
                                };
                                ?>
                            </ul>
                        </li>
                        <li <?php echo ($currentPage == 'about') ? 'class="active"' : ''; ?>>
                            <a href="about.php">About</a>
                        </li>

                        <li <?php echo ($currentPage == 'contact') ? 'class="active"' : ''; ?>>
                            <a href="contact.php">Contact Us</a>
                        </li>

                    </ul>
                    <ul class="nav__menu">
                        <?php
                        if (!isset($_SESSION['user'])) {
                        ?>

                            <li class="nav__dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class='bx bxs-user-circle'></i> Akun <span class="caret"></span></a>
                                <ul class="nav__dropdown-menu">
                                    <li><a href="user_login.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                </ul>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav__dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?= $_SESSION['user']; ?> <span class="caret"></span></a>
                                <ul class="nav__dropdown-menu">
                                    <li><a href="proses/logout.php">LogOut</a></li>
                                </ul>
                            </li>

                        <?php
                        }
                        ?>
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