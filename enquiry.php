
<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>Enquiry | Florette Relocations | Moving service company</title>
    <meta name="description" content="Florette Relocations, the leader in Moving service company industry, we are committed to creating value through our quality services and personalized care."/>
    <link rel="canonical" href="<?php echo $base_url;?>enquiry.php" />
 
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
                src="assets/images/enquiry/enquiry-bg.webp" 
                srcset="
                    assets/images/enquiry/enquiry-bg-sm.webp 576w,
                    assets/images/enquiry/enquiry-bg-md.webp 1000w,
                    assets/images/enquiry/enquiry-bg.webp 1200w 
                "
                alt="<?php echo $site_name;?>" width="1903" height="448"
                class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
            />
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-secondary opacity-75 "></div>
            <div class="container position-relative z-3">
                <h1 class="display-5 text-white text-uppercase unic_wrap">Enquiry</h1>
                <p class="fs-4 fw-light text-white">Please fill in the form. We will get in touch with you asap. </p>
            </div>
        </header>
        <!-- Header Wrapper End -->

        <!-- Our Clients start -->
        <section class="py-5 py-lg-0">
            <div class="container"> 
                <div class="row g-4 gx-lg-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="z-1">
                            <h2 class="display-5 text-13 fw-light text-uppercase unic_wrap">Feel free to contact us</h2>
                            <p class="lead-sm">
                                All your queries have a solution. Clear cut clarification to all your questions will be provided by our personalised assistance, cause we ought to give the best customer satisfaction. So with our assistant, raise your queries, discuss the project or to simply connect.
                            </p> 
                        </div>
                    </div><!--//.col-->

                    <div class="col-lg-6">
                        <div class="img__wraper position-relative">
                            <img src="assets/images/career/we-are-hiring.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" width="1200" height="692" alt="We are hiring">
                            <div class="position-absolute top-0 start-0 w-100 h-100"></div> 

                            <div class="position-relative py-4 py-lg-5">
                                <div class="patient__login position-relative mx-3">
                                    <h1 class="display-4 fw-semibold text-white text-uppercase my-4">Get A Quote</h1> 
                                    <p class="lead-lg fw-medium text-white mb-4">Say hello and send us message.</p>
                                    
                                    <form action="#" class="row g-4"> 
                                        <div class="col-lg-6"> 
                                            <input type="text" name="text" class="form-control fs-15 fw-light" placeholder="Moving From *" required>
                                            <div class="small text-danger error" id="text_error"></div>
                                        </div>
                                        <div class="col-lg-6"> 
                                            <input type="text" name="moving" class="form-control fs-15 fw-light" placeholder="Moving To *" >
                                            <div class="small text-danger error" id="moving_error"></div>
                                        </div>
                                        <div class="col-lg-6">   
                                            <select class="form-select px-4" aria-label="Select A Service">
                                                <option selected>Select A Service *</option>
                                                <option value="1">International Move</option>
                                                <option value="2">Corporate Relocation</option>
                                                <option value="3">Domestic Move</option> 
                                                <option value="3">Office Move</option> 
                                                <option value="3">Storage & Warehousing</option> 
                                                <option value="3">Pet Relocation</option> 
                                                <option value="3">Specialized Container Shipping For Global Trade</option> 
                                                <option value="3">Comprehensive Insurance</option> 
                                                <option value="3">Inbound Service</option>  
                                            </select> 
                                        </div>
                                        <div class="col-lg-6"> 
                                            <input type="text" name="name" class="form-control fs-15 fw-light" placeholder="Name *" required>
                                            <div class="small text-danger error" id="name_error"></div>
                                        </div>
                                        <div class="col-lg-6"> 
                                            <input type="email" name="email" class="form-control fs-15 fw-light" placeholder="Email *" required>
                                            <div class="small text-danger error" id="phone_error"></div>
                                        </div>
                                        <div class="col-lg-6"> 
                                            <input type="text" name="phone" class="form-control fs-15 fw-light" placeholder="Phone Nmber *" required>
                                            <div class="small text-danger error" id="phone_error"></div>
                                        </div> 
                                        
                                        <div class="my-4 mt-xl-4">
                                            <a href="#" class="btn btn-primary rounded-pill height px-5 text-uppercase">SEND ENQUIRY</a>
                                        </div>
                                    </form> 
                                </div> 

                                <div class="form__gradient h-100 w-100 position-absolute top-0 end-0"></div>
                            </div> 
                        </div>
                    </div><!--//.col-->
                </div><!--//.row--> 
            </div><!--//.container-->
        </section>
        <!-- Our Clients End --> 

                 
    </main>


    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
   
</body>
</html>
