<?php
session_start();
?>
<!-- 
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

-->
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>AShop | E-commerce Website</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">
  <div class="container" style="margin-top: 2rem; padding-top: 2rem">
  <div class="block text-center">
  <a class="logo" href="index.php">
    <img style="height:8rem;width:15rem"src="images/logo.png" alt="">
  </a>
  </div>
  </div>
<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="block text-center" style="margin-bottom:1em">
          <h2 class="text-center">Create Your Store Account</h2>
          <form class="text-left clearfix" id="storeSignUpF" action="php/storeSignUp.php" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Store/Seller Name" name="name" id="name">
            
              <div id="name_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="nerror"></span>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Store Owner Name" name="store_owner" id="owner">
            
              <div id="owner_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="oerror"></span>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Phone Number" name="phone_nb" id="phone_nb">
              <div id="phone_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="perror"></span>
              </div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control"  placeholder="Email" name="email" id="email">
              <div id="email_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="error"></span>
              </div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  placeholder="Password" name="password" id="password">
              <div id="pass_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="perror"></span>
              </div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  placeholder="Confirm Password" name="confirmPass" id="confirmPass">
              <div id="cpass_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="cperror"></span>
              </div>
            </div>
            <h4 class="text-left">Store image/LOGO:</h4>
            <hr>
            <div class="custom-file form-group form-control">
              <input type="file" class="" id="image" name="image" required>
              <div id="image_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="ierror"></span>
            </div>
            </div>
            <h4 class="text-left">Address Information:</h4>
            <hr>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Country" name="country">
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="City" name="city">
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Street" name="street">
            </div>
            <div>
              <?php 
              if (isset($_SESSION['s_error']) && $_SESSION['s_error']==true){
              echo '<p style="color: red">'. $_SESSION['s_flash'].'</p>';
              $_SESSION['s_error'] = false;
              $_SESSION['s_flash'] = '';
              }
              ?>
            </div>
            <div class="text-center">
              <button type="button" class="btn btn-main text-center" id="storeSignUp">Create Account</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="block text-center" style="margin-bottom:1em">
          <h2 class="text-center">Create Your Customer Account</h2>
          <form class="text-left clearfix" action="php/customerSignUp.php" enctype="multipart/form-data" method="post" id="customerSignUpF">
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="First Name" name="c_first_name" id="c_first_name">

              <div id="c_fname_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="cfnerror"></span>
              </div>
            
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Last Name" name="c_last_name" id="c_last_name">

              <div id="c_lname_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="clnerror"></span>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Phone Number" name="c_phone_nb" id="c_phone">

              <div id="c_phone_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="cperror"></span>
              </div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control"  placeholder="Email" name="c_email" id="c_email">

              <div id="c_email_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="cerror"></span>
              </div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  placeholder="Password" name="c_password" id="c_password">
              <div id="c_pass_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="cperror"></span>
              </div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  placeholder="Confirm Password" name="c_confirmPass" id="c_confirmPass">
              <div id="c_cpass_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="ccperror"></span>
              </div>
            </div>
            <h4 class="text-left">Profile Picture:</h4>
            <hr>
            <div class="custom-file form-group form-control">
              <input type="file" class="" id="c_image" name="c_image" required>
              <div id="C_image_error" class="alert alert-danger alert-common alert-dismissible" role="alert" hidden> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="tf-ion-close-circled"></i><span id="cierror"></span>
              </div>
            </div>
            <h4 class="text-left">Address Information:</h4>
            <hr>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Country" name="c_country">
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="City" name="c_city">
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Street" name="c_street">
            </div>
            <div>
              <?php 
              if (isset($_SESSION['c_error']) && $_SESSION['c_error']==true){
              echo '<p style="color: red">'. $_SESSION['c_flash'].'</p>';
              $_SESSION['c_error'] = false;
              $_SESSION['c_flash'] = '';
              }
              ?>
            </div>
            <div class="text-center">
              <button type="button" class="btn btn-main text-center" id="customerSignUp">Create Account</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center" style="margin-top:0">
          <p class="mt-20">Already hava an account ?<a href="login.html"> Login</a></p>
          <p><a href="forget-password.html"> Forgot your password?</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.twitter.com">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="contact.html">CONTACT</a>
					</li>
          <li>
						<a href="index.php">SHOP</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    <script src="js/script2.js"></script>


  </body>
  </html>