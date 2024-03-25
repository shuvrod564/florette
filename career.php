
<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>Clients | Florette Relocations | Moving service company</title>
    <meta name="description" content="Florette Relocations, the leader in Moving service company industry, we are committed to creating value through our quality services and personalized care."/>
    <link rel="canonical" href="<?php echo $base_url;?>clients.php" />
 
    <!-- All Stylesheets --> 
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
     
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <main>
        <!-- Header Wrapper Start -->
        <header class="page__header position-relative ">
            <img 
                src="assets/images/our-team/ourteam-florette-bg.webp" 
                srcset="
                    assets/images/our-team/ourteam-florette-bg-sm.webp 576w,
                    assets/images/our-team/ourteam-florette-bg-md.webp 1000w,
                    assets/images/our-team/ourteam-florette-bg.webp 1200w 
                "
                alt="<?php echo $site_name;?>" width="1903" height="448"
                class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
            />
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-secondary opacity-75 "></div>
            <div class="container position-relative z-3">
                <h1 class="display-5 text-white text-uppercase unic_wrap">Clients</h1>
                <p class="fs-4 fw-light text-white">Our client's Interest Our priority.</p>
            </div>
        </header>
        <!-- Header Wrapper End -->

        <!-- Our Clients start -->
        <section class="our__team py-5">
            <div class="container mt-lg-3">
                <h2 class="fs-1 text-25 fw-light text-center text-uppercase unic_wrap center pt-xl-4">Our Clients</h2>
                <p class="fs-4 text-dark fw-light text-center mb-3 mb-xl-5">
                    Our company partnerships
                </p>

                <div class="row g-4 g-lg-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 justify-content-between">
                    <div class="col-lg-3">
                        <img src="assets/images/clients/qatar-airways-logo-1.webp" class="img-fluid w-100" width="" height="" alt="Our company partnerships">
                    </div>
                    <div class="col-lg-3">
                        <img src="assets/images/clients/singapore.webp" class="img-fluid w-100" width="" height="" alt="Our company partnerships">
                    </div>
                    <div class="col-lg-3">
                        <img src="assets/images/clients/ranbaxy.webp" class="img-fluid w-100" width="" height="" alt="Our company partnerships">
                    </div>
                    <div class="col-lg-3">
                        <img src="assets/images/clients/malaysia.webp" class="img-fluid w-100" width="" height="" alt="Our company partnerships">
                    </div>
                    <div class="col-lg-3">
                        <img src="assets/images/clients/schlumberger.webp" class="img-fluid w-100" width="" height="" alt="Our company partnerships">
                    </div>
                    <div class="col-lg-3">
                        <img src="assets/images/clients/uco.webp" class="img-fluid w-100" width="" height="" alt="Our company partnerships">
                    </div>
                    <div class="col-lg-3">
                        <img src="assets/images/clients/shell.webp" class="img-fluid w-100" width="" height="" alt="Our company partnerships">
                    </div>
                </div>  
            </div><!--//.container-->
        </section>
        <!-- Our Clients End --> 


    </main>


    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
   
</body>
</html>
