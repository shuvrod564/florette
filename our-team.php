
<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>Our Team Members | Florette Relocations | Moving service company</title>
    <meta name="description" content="Florette Relocations, the leader in Moving service company industry, we are committed to creating value through our quality services and personalized care."/>
    <link rel="canonical" href="<?php echo $base_url;?>our-team.php" />
 
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
                <h1 class="display-5 text-white text-uppercase unic_wrap">Our Team</h1>
                <p class="fs-4 fw-light text-white">We bring a wealth of skills and experience from a wide range of backgrounds.</p>
            </div>
        </header>
        <!-- Header Wrapper End -->

        <!-- Our Team Members start -->
        <section class="our__team py-5">
            <div class="container py-lg-4">
                <h2 class="fs-1 text-13 fw-light text-center text-uppercase unic_wrap center">Our Team Members</h2>
                <p class="fs-4 text-dark fw-light text-center mb-3 mb-xl-5">
                    Meet our exceptionally talented team. 
                </p>

                <div class="owl-carousel ourteamSlider">
                    <div class="team_card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/our-team/team.webp" class="img-fluid team__thumbnail rounded-circle" width="309" height="326" alt="Our Team Members"> 
                        </div>
                        <p class="lead-sm text-center mt-4"> 
						    I coordinate the activities of a team, department & organization.
                        </p>
                        <div class="my-4 mt-xl-4 text-center">
                            <a href="mailto:operations@floretterelo.com" class="btn btn-primary rounded-pill height sm py-2 px-5 text-uppercase">Contact Me</a>
                        </div>
                        <p class="lead-lg text-25 fw-medium text-center mb-0">
                            Manager
                        </p>
                        <span class="fs-3 fw-light text-13 text-center d-block">JENEFIR WHITE</span>
                    </div> 

                    <div class="team_card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/our-team/team.webp" class="img-fluid team__thumbnail rounded-circle" width="309" height="326" alt="Our Team Members"> 
                        </div>
                        <p class="lead-sm text-center mt-4">  
						    I coordinate enquiries & arranage meetings. How can I help you.
                        </p>
                        <div class="my-4 mt-xl-4 text-center">
                            <a href="mailto:sales@floretterelo.com" class="btn btn-primary rounded-pill height sm py-2 px-5 text-uppercase">Contact Me</a>
                        </div>
                        <p class="lead-lg text-25 fw-medium text-center mb-0">
                            Sales Coordinator
                        </p>
                        <span class="fs-3 fw-light text-13 text-center text-uppercase d-block">Liza Chan</span>
                    </div> 

                    <div class="team_card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/our-team/team.webp" class="img-fluid team__thumbnail rounded-circle" width="309" height="326" alt="Our Team Members"> 
                        </div>
                        <p class="lead-sm text-center mt-4">   
                            I make sure everything work smoothly, feel free to contact.
                        </p>
                        <div class="my-4 mt-xl-4 text-center">
                            <a href="mailto:operations@floretterelo.com" class="btn btn-primary rounded-pill height sm py-2 px-5 text-uppercase">Contact Me</a>
                        </div>
                        <p class="lead-lg text-25 fw-medium text-center mb-0">
                            Office Coordinator
                        </p>
                        <span class="fs-3 fw-light text-13 text-center text-uppercase d-block">Abdulla Ahmad</span>
                    </div> 

                    <div class="team_card">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/our-team/team.webp" class="img-fluid team__thumbnail rounded-circle" width="309" height="326" alt="Our Team Members"> 
                        </div>
                        <p class="lead-sm text-center mt-4">    
						I take care of your goods reach their destination safely.
                        </p>
                        <div class="my-4 mt-xl-4 text-center">
                            <a href="mailto:operations@floretterelo.com" class="btn btn-primary rounded-pill height sm py-2 px-5 text-uppercase">Contact Me</a>
                        </div>
                        <p class="lead-lg text-25 fw-medium text-center mb-0">
                            Supervisor
                        </p>
                        <span class="fs-3 fw-light text-13 text-center text-uppercase d-block">Aravind</span>
                    </div> 
                     
                </div><!--//.owl-carousel-->
            </div><!--//.container-->
        </section>
        <!-- Our Team Members End --> 


    </main>


    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
   
</body>
</html>
