
<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>Our Team | Florette Relocations | Moving service company</title>
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
                src="assets/images/contact/contact-bg.webp" 
                srcset="
                    assets/images/contact/contact-bg-sm.webp 576w,
                    assets/images/contact/contact-bg-md.webp 1000w,
                    assets/images/contact/contact-bg.webp 1200w 
                "
                alt="<?php echo $site_name;?>" width="1903" height="448"
                class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
            />
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-secondary opacity-75 "></div>
            <div class="container position-relative z-3">
                <h1 class="display-5 text-white text-uppercase unic_wrap">Contact us</h1>
                <p class="fs-4 fw-light text-white">Please fill in the form. We will get in touch with you asap.</p>
            </div>
        </header>
        <!-- Header Wrapper End -->

        <!-- Our Team Members start -->
        <section class="py-5 bg-gradient ">
            <div class="container">
                <div class="row g-4 gx-xl-5">
                    <div class="col-lg-6">
                        <h2 class="fs-1 text-13 fw-light text-uppercase unic_wrap pt-xl-4">GET IN TOUCH</h2>
                        <p class="fs-5  mb-3 mb-xl-5">
                            Have any questions? We are always happy to help. Do not hesitate to call us or Fill up the form below. We try to get back as soon as possible.
                        </p>

                        <form action="#" class="row g-3 ">
                            <div class="col-12">
                                <input type="text" name="name" class="form-control" placeholder="Name *">
                                <small class="text-danger error" id="name_error"></small>
                            </div>
                            <div class="col-12">
                                <input type="text" name="name" class="form-control" placeholder="Phone Number *">
                                <small class="text-danger error" id="name_error"></small>
                            </div>
                            <div class="col-12">
                                <input type="text" name="email" class="form-control" placeholder="Email *">
                                <small class="text-danger error" id="name_error"></small>
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject *">
                                <small class="text-danger error" id="subject_error"></small>
                            </div>
                            <div class="col-12">
                                <textarea name="message" id="message" cols="30" rows="4" class="form-control h-auto" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary height rounded-pill px-4 px-sm-5 text-uppercase ">Submit</button>
                            </div>
                        </form>
                    </div><!--.//col-->
                </div><!--.//row-->

                 
            </div><!--//.container-->
        </section>
        <!-- Our Team Members End --> 


    </main>


    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
   
</body>
</html>
