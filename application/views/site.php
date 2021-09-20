<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title><?php echo $title; ?></title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/resources/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/resources/css/swiper.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/resources/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url(); ?>/resources/images/favicon.png">
</head>
<body>
    
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation" style="background: #2b2b4f;">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-text" href="<?php echo site_url('Home')?>">AEY GROUP</a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>services">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>contacts">Contact Us</a>
                    </li>
                </ul>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <?php $this->load->view($view_page); ?>  <!-- Footer -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <p>Menu: <a class="page-scroll" href="<?php echo base_url()?>home">Home</a>,  <a class="page-scroll" href="<?php echo base_url()?>services">Services</a>, <a class="page-scroll" href="<?php echo base_url()?>about">About Us</a>, <a class="page-scroll" href="<?php echo base_url()?>contact_us">Contact</a></p>
                    <p class="p-small">Copyright © <a href="<?php echo site_url('Home')?>">aey-group</a></p>
                </div> 
                
                <div class="col-lg-12">
                    <p class="p-small">Distributed by :<a href="<?php echo site_url('Home')?>">AEY GROUP</a></p>
                </div> <<!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="<?php echo base_url(); ?>/resources/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->
    	
    <!-- Scripts -->
    <script src="<?php echo base_url(); ?>/resources/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?php echo base_url(); ?>/resources/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?php echo base_url(); ?>/resources/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="<?php echo base_url(); ?>/resources/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>