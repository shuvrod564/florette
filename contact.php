
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
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
                        <p class="fs-5 fw-light  mb-3 mb-xl-5">
                            Have any questions? We are always happy to help. Do not hesitate to call us or Fill up the form below. We try to get back as soon as possible.
                        </p>

                        <form action="#" class="row g-3 ">
                            <div class="col-12">
                                <input type="text" name="name" class="form-control" placeholder="Name *">
                                <small class="text-danger error" id="name_error"></small>
                            </div>
                            <div class="col-12">
                                <input type="text" name="name" id="mobile_code" class="form-control" placeholder="Phone Number *">
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

                    <div class="col-lg-6">
                        <h2 class="fs-1 text-13 fw-light text-uppercase unic_wrap pt-xl-4">OUR OFFICE</h2>
                        <h2 class="fs-4 fw-light">Feel free to contact us anytime you need our services. </h2>
                        <p class="  mb-3 mb-xl-5">
                            Contact us now to get quote for all your global shipping and cargo need. 
                        </p>
                        <div class="transition w-100 ">
                            <p class="mb-0 fs-4 text-uppercase text-primary fw-semibold ">Corporate Head office</p> 
                            <p class="text-uppercase fw-medium text-secondary  lead">Kuala Lumpur, MALAYSIA</p>
                            <ul class="d-flex flex-column gap-3 contact__list">
                                <li class="d-flex gap-3 align-items-start ">
                                    <figure class="icon bg-primary rounded-circle d-flex justify-content-center align-items-center mb-0">
                                        <img src="assets/images/icons/maps-flags.svg" width="24" height="24" alt="Location">
                                    </figure>
                                    <div class="col"> 
                                        <p class="mb-2 fw-normal text-4b lh-1 ">Address</p>
                                        <address class="lead-sm fw-medium  text-dark lh-base mb-0">
                                            Florette Relocations Level 35-02 (East Wing), <br>
                                            QSentral 2A, Jalan Stesen Sentral 2, <br>
                                            KL Sentral, Kuala Lumpur 50470, MALAYSIA
                                        </address>
                                    </div>
                                </li>
                                <li class="d-flex gap-3 align-items-center ">
                                    <figure class="icon bg-primary rounded-circle d-flex justify-content-center align-items-center mb-0">
                                        <img src="assets/images/icons/email-white.svg" width="24" height="24" alt="Email">
                                    </figure>
                                    <div class="col">
                                        <p class="mb-0 fw-normal text-4b lh-1 ">Email</p>
                                        <a href="mailto:sales@floretterelo.com" class="lead-sm fw-semibold text-4b text-lowercase text-wrap word-wrap lh-1" style="word-break: break-all;">sales@floretterelo.com</a>
                                    </div>
                                </li>
                                <li class="d-flex gap-3 align-items-center ">
                                    <figure class="icon bg-primary rounded-circle d-flex justify-content-center align-items-center mb-0">
                                        <img src="assets/images/icons/telephone-call-white.svg" width="24" height="24" alt="Telephone">
                                    </figure>
                                    <div class="col"> 
                                        <p class="mb-0 fw-normal text-4b lh-1 ">Phone</p>
                                        <a href="tel:+60127482799" class="lead fw-semibold text-4b">+60 127482799</a>
                                    </div>
                                </li> 
                            </ul> 
                        </div>
                        <div class="transition w-100 mt-4">
                            <p class="mb-0 fs-5 text-primary  fw-semibold text-uppercase ">Malaysia- Branch offices</p> 
                            <p class="text-uppercase fw-medium text-secondary  lead">Johor Bahru</p>
                            <ul class="d-flex flex-column gap-3 contact__list"> 
                                <li class="d-flex gap-3 align-items-center ">
                                    <figure class="icon bg-primary rounded-circle d-flex justify-content-center align-items-center mb-0">
                                        <img src="assets/images/icons/email-white.svg" width="24" height="24" alt="Email">
                                    </figure>
                                    <div class="col">
                                        <p class="mb-0 fw-normal text-4b lh-1 ">Email</p>
                                        <a href="mailto:sales@floretterelo.com" class="lead-sm fw-semibold text-4b text-lowercase text-wrap word-wrap lh-1" style="word-break: break-all;">sales@floretterelo.com</a>
                                    </div>
                                </li> 
                                <li class="d-flex gap-3 align-items-center ">
                                    <figure class="icon bg-primary rounded-circle d-flex justify-content-center align-items-center mb-0">
                                        <img src="assets/images/icons/telephone-call-white.svg" width="24" height="24" alt="Telephone">
                                    </figure>
                                    <div class="col"> 
                                        <p class="mb-0 fw-normal text-4b lh-1 ">Phone</p>
                                        <a href="tel:+60124610090" class="lead fw-semibold text-4b">+60 124610090</a>
                                    </div>
                                </li> 
                            </ul>
                            <p class="text-uppercase fw-medium text-secondary text-uppercase lead mb-2">Penang</p>
                            <ul class="d-flex flex-column gap-3 contact__list"> 
                                <li class="d-flex gap-3 align-items-center">
                                    <figure class="icon bg-primary rounded-circle d-flex justify-content-center align-items-center mb-0">
                                        <img src="assets/images/icons/email-white.svg" width="24" height="24" alt="Email">
                                    </figure>
                                    <div class="col">
                                        <p class="mb-0 fw-normal text-4b lh-1 ">Email</p>
                                        <a href="mailto:	" class="lead-sm fw-semibold text-4b text-lowercase text-wrap word-wrap lh-1" style="word-break: break-all;">anoop@floretterelo.com</a>
                                    </div>
                                </li>  
                            </ul> 
                        </div>
                        <div class="transition w-100 mt-4">
                            <p class="mb-0 fs-5 text-primary  fw-semibold text-uppercase ">Overseas office</p> 
                            <p class="text-uppercase fw-medium text-secondary lead mb-2">OUR INDIAN OFFICE</p>
                            <ul class="d-flex flex-column gap-3 contact__list"> 
                                <li class="d-flex gap-3 align-items-start ">
                                    <figure class="icon bg-primary rounded-circle d-flex justify-content-center align-items-center mb-0">
                                        <img src="assets/images/icons/maps-flags.svg" width="24" height="24" alt="Location">
                                    </figure>
                                    <div class="col"> 
                                        <p class="mb-2 fw-normal text-4b lh-1 ">Address</p>
                                        <address class="lead-sm fw-medium  text-dark lh-base mb-0">
                                            Florette Relocations 4/41 Hussain Maistry <br>
                                            Street, Royapuram, Chennai - 600013
                                        </address>
                                    </div>
                                </li> 
                                <li class="d-flex gap-3 align-items-center ">
                                    <figure class="icon bg-primary rounded-circle d-flex justify-content-center align-items-center mb-0">
                                        <img src="assets/images/icons/telephone-call-white.svg" width="24" height="24" alt="Telephone">
                                    </figure>
                                    <div class="col"> 
                                        <p class="mb-0 fw-normal text-4b lh-1 ">Phone</p>
                                        <a href="tel:+919566029301" class="lead fw-semibold text-4b">+91 9566029301</a>
                                    </div>
                                </li> 
                            </ul>  
                        </div>
                    </div>
                </div><!--.//row-->

                 
            </div><!--//.container-->
        </section>
        <!-- Our Team Members End --> 

        <div class="container-fluid px-0">
            <iframe class="ratio-4x3 ratio w-100" loading="lazy" src="https://maps.google.com/maps?q=Florette%20Relocation&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near" title="Florette Relocation" width="600" height="450" aria-label="Florette Relocation"></iframe>
        </div>

    </main>


    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
   
    <script>
        $(document).ready(function() {
 
            // -----Country Code Selection
            $("#mobile_code").intlTelInput({
                initialCountry: "au",
                separateDialCode: true, 
            });
            $("#mobile_code").on("countrychange", function() {
                var selectedCountryData = $("#mobile_code").intlTelInput("getSelectedCountryData");
                var phoneCode = selectedCountryData.dialCode;
                $("#mphoneDialCode").val(phoneCode);
                // console.log("Selected phone code:", phoneCode);
            });

            $("#contactFormM").submit(function() {
                if (validateContactForm2()) {
                    return true;
                }
                else {
                    return false;
                }
            }); 

            function validateContactForm2() {
                var valid = true;	
                $(".form-control").css('border-color','');
                $(".error").html('');
                
                // User name validation
                if(!$("#mfname").val()) {
                    $("#mfname_error").html("First name required");
                    $("#mfname").css('border-color','#dc3545');
                    valid = false;
                } else {
                    $("#mfname_error").html("");
                    $("#mfname").css('border-color','#099f1a');
                }  
                
            
                var phno2 = $.trim($('#mmobile_code').val());
                var che_phno2 = /^[0-9]{7,15}$/;
                if(!$("#mmobile_code").val()) {
                    $("#mmobile_code_error").html("Phone number required");
                    $("#mmobile_code").css('border-color','#dc3545');
                    valid = false;
                } if (!che_phno2.test(phno2)) {
                    $("#mmobile_code").css('border-color','#dc3545');
                    $("#mmobile_code_error").html('Please enter valid phone no'); 
                    valid = false;
                } else if (phno2.length < 7 || phno2.length > 15) {
                    $("#mmobile_code").css('border-color','#dc3545');
                    $("#mmobile_code_error").html('Phone no. must be greater than or equals to 7 and less than or equals to 15 digits!!'); 
                    valid = false;
                } else {
                    $("#mmobile_code_error").html("");
                    $("#mmobile_code").css('border-color','#099f1a');
                } 
                //  
                if(!$("#memail").val()) {
                    $("#memail_error").html("Email is required");
                    $("#memail").css('border-color','#dc3545');
                    valid = false;
                } else if(!$("#memail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                    $("#memail_error").html("Invalid email");
                    $("#memail").css('border-color','#dc3545');
                    valid = false;
                } else {
                    $("#memail_error").html("");
                    $("#memail").css('border-color','#099f1a');
                } 
            
                if(!$("#mservice").val()) {
                $("#mservice_error").html("Service required");
                $("#mservice").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#mservice_error").html("");
                $("#mservice").css('border-color','#099f1a');
            }  

                return valid;
            }

            

            });
    </script>
</body>
</html>
