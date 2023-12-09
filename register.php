<!DOCTYPE html>
<html lang="en">

<head>
  <title>Deus | About</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  
  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Lazyload (must be placed in head in order to work) -->
  <script src="js/lazysizes.min.js"></script>

</head>

<body class="style-default style-rounded">

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
    <?php include "navbar.php" ?>
    <!-- end navigation -->



    <!-- Breadcrumbs -->
    <div class="container">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a href="index.php" class="breadcrumbs__url">Home</a>
        </li>
        <li class="breadcrumbs__item">
          <a href="register.php" class="breadcrumbs__url">Register</a>
        </li>
      </ul>
    </div>
    
    <div class="main-container container" id="main-container">
      <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/register.jpg)">
        <div class="container" style="padding-bottom: 100px;">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="cta-content">
                <br>
                <br>
                <h2><em>Register</em></h2>
                <p>Silahkan Registrasi Terlebih Dahulu !</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section" >
      <div class="container" style="padding-bottom: 250px;">
	<h2 style=" width: 100%; border-bottom: 4px solid #2D95E3"><b>Register</b></h2>
    <br>
    <br>
    <br>
	<form action="proses/register.php" method="POST">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Nama</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Email</label>
					<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">username</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" name="username" required >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">No Tepl</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="+62" name="telp" required >
				</div>
			</div>

		</div>


		<div class="row">
			
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Konfirmasi Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Password" name="konfirmasi" required>
				</div>
			</div>
		</div>

		<button type="submit" class="btn btn-success">Register</button>
	</form>
</div>
</section>
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
  <script src="assets/js/popper.js"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/owl-carousel.min.js"></script>
  <script src="js/flickity.pkgd.min.js"></script>
  <script src="js/twitterFetcher_min.js"></script>
  <script src="js/jquery.newsTicker.min.js"></script>
  <script src="js/modernizr.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="assets/js/accordions.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>