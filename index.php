
<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Moving and Packing Services | International Packing Company</title>
 
    <!-- All Stylesheets --> 
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
     
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 
    
    <!-- header section start -->
    <header class="header__wraper">  
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="First slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="1"
                    aria-label="Second slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="2"
                    aria-label="Third slide"
                ></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="slider__item position-relative d-flex align-items-center">
                        <img 
                            src="assets/images/home/truck.webp" 
                            srcset="
                                assets/images/home/truck-sm.webp 576w,
                                assets/images/home/truck-md.webp 1000w,
                                assets/images/home/truck.webp 1200w 
                            "
                            alt="<?php echo $site_name;?>"
                            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
                        />
                        <div class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background-color: rgba(0, 0, 0, 0.54);"></div>
                        <div class="container mb-4 mb-lg-5">
                            <div class="row gx-4 align-items-center justify-content-center">
                                <div class="col-xxl-10 col-lg-9 mt-0">
                                    <div class="content__bg z-index ">
                                        <p class="lead fw-normal text-white text-center">
                                            EXPERIENCE A CARING RELOCATION JOURNEY WITH FLORETTE RELOCATIONS.
                                        </p>
                                        <p class="display-4 text-white my-3 fw-bold text-center">
                                            Your Premier Choice for Expert Moving & Packing Services Across World.
                                        </p>
                                        <p class="lead fw-normal text-white text-center">Florette Relocations: Caring Relocation Experts Handling Your Belongings With Utmost Care.</p> 
                                    </div><!--//.content__bg-->
                                </div><!--.//col--> 
                            </div><!--.//row--> 
                        </div><!--.//container-->
                    </div>
                </div><!--carousel__item-->
                <div class="carousel-item">
                    <div class="slider__item position-relative d-flex align-items-center">
                        <img 
                            src="assets/images/home/Kuala-Lumpur.webp" 
                            srcset="
                                assets/images/home/Kuala-Lumpur-sm.webp 576w,
                                assets/images/home/Kuala-Lumpur-md.webp 1000w,
                                assets/images/home/Kuala-Lumpur.webp 1200w 
                            "
                            alt="<?php echo $site_name;?>"
                            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
                        />
                        <div class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background-color: rgba(0, 0, 0, 0.54);"></div>
                        <div class="container mb-4 mb-lg-5">
                            <div class="row gx-4 align-items-center justify-content-center">
                                <div class="col-xxl-10 col-lg-9 mt-0">
                                    <div class="content__bg z-index ">
                                        <p class="lead fw-normal text-white text-center">
                                            FLORETTE RELOCATIONS: CARING RELOCATION EXPERTS HANDLING YOUR BELONGINGS WITH UTMOST CARE.
                                        </p>
                                        <p class="display-4 text-white my-3 fw-bold text-center">
                                            Your Number One Choice For Tailored Relocation Solutions Worldwide. 
                                        </p> 
                                    </div><!--//.content__bg-->
                                </div><!--.//col--> 
                            </div><!--.//row--> 
                        </div><!--.//container-->
                    </div>
                </div><!--carousel__item-->
                <div class="carousel-item">
                    <div class="slider__item position-relative d-flex align-items-center">
                        <img 
                            src="assets/images/home/banner.webp" 
                            srcset="
                                assets/images/home/banner-sm.webp 576w,
                                assets/images/home/banner-md.webp 1000w,
                                assets/images/home/banner.webp 1200w 
                            "
                            alt="<?php echo $site_name;?>"
                            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
                        />
                        <div class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background-color: rgba(0, 0, 0, 0.54);"></div>
                        <div class="container mb-4 mb-lg-5">
                            <div class="row gx-4 align-items-center justify-content-center">
                                <div class="col-xxl-10 col-lg-9 mt-0">
                                    <div class="content__bg z-index ">
                                        <p class="lead fw-normal text-white text-center">
                                            Florette Relocations: We make your relocation journey easy.
                                        </p>
                                        <p class="display-5 text-white my-3 fw-bold text-center">
                                            Florette is a leading global moving and relocation services provider offering solutions for relocation programs of any size, frequency and complexity.
                                        </p> 
                                    </div><!--//.content__bg-->
                                </div><!--.//col--> 
                            </div><!--.//row--> 
                        </div><!--.//container-->
                    </div>
                </div><!--carousel__item-->
                 
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> 
    </header>
    <!-- header section end --> 
    
    <!-- form section Start -->
    <div class="container z-index">
        <div class="receive__quote py-3 py-lg-4 px-4 px-lg-5">
            <p class="lead fw-normal text-white text-center">Receive a quote tailored to your unique needs and experience moving made easy.</p>
            <form action="#" class="row g-2 contact__wrapper">
                <div class="col-md-6 col-lg-3">
                    <input type="text" name="name" id="name" placeholder="Moving from" class="form-control rounded-0">
                    <div class="small text-danger error" id="name_error"></div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <input type="text" name="phone" id="phone" placeholder="Moving To" class="form-control rounded-0">
                    <div class="small text-danger error" id="phone_error"></div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <select name="service" id="service" class="form-select rounded-0" required="required">
                        <option value="">Select A Service *</option>
                        <option value="International Move">International Move</option>
                        <option value=" Corporate Relocation">Corporate Relocation</option>
                        <option value=" Domestic Move">Domestic Move</option>
                        <option value=" Office Move">Office Move</option>
                        <option value=" Storage &amp; Warehousing">Storage &amp; Warehousing</option>
                        <option value=" Pet Relocation">Pet Relocation</option>
                        <option value=" Specialized Container Shipping For Global Trade">Specialized Container Shipping For Global Trade</option>
                        <option value=" Comprehensive Insurance">Comprehensive Insurance</option>
                        <option value=" Inbound Service">Inbound Service</option>
                    </select>
                    <div class="small text-danger error" id="email_error"></div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <button class="btn btn-primary height rounded-pill px-4 px-lg-5 w-100">GET A QUOTE</button> 
                </div>  
            </form>  
        </div> 
    </div> 
    <!-- form section End -->

    <!-- Services Wrapper Start -->
    <section class="py-5" style="background-color: #13314C;">
        <div class="container py-md-4 py-lg-5">
            <p class="fs-1 fw-normal unic_wrap center text-center text-white text-uppercase mb-3">Our Solutions</p>
            <p class="text-center text-white py-3 col-lg-8 col-xl-6 mx-auto">
                At Florette Movers, We Are Dedicated To Conducting Continuous Research And Consistently Improving Our Services To The Highest Standards.
            </p>

            <div class="row gx-3 row-cols-xl-6 row-cols-md-3 row-cols-sm-2 justify-content-center mt-4 mt-lg-5 text-center"> 
                <div> 
                    <div class="service__item">
                        <a href="#" class="block"> 
                            <img 
                                src="assets/images/icons/international-relocation.svg" 
                                class="img-fluid transition" width="63" height="63" 
                                alt="International Relocation"
                            >
                        </a>
                        <p class="text-white text-uppercase mt-4">
                            <a href="#" class="link__white">International Relocation</a>
                        </p>
                    </div>
                </div><!--//.col-->
                <div>
                    <div class="service__item">
                        <a href="#" class="d-block" title="Domestic Move"> 
                            <img src="assets/images/icons/domestic-move.svg" class="img-fluid transition" width="80" height="80" alt="Domestic Move">
                        </a>
                        <p class="text-white text-uppercase mt-4">
                            <a href="#" class="link__white">Domestic Move</a>
                        </p>
                    </div>
                </div><!--//.col-->
                <div>
                    <div class="service__item">
                        <a href="#" class="d-block" title="warehouses"> 
                            <img src="assets/images/icons/warehouses.svg" class="img-fluid transition" width="65" height="65" alt="Warehouses">
                        </a>
                        <p class="text-white text-uppercase mt-4">
                            <a href="#" class="link__white">Warehouses</a>
                        </p>
                    </div>
                </div><!--//.col-->
                <div>
                    <div class="service__item">
                        <a href="#" class="d-block" title="Pet Handling">
                            <img src="assets/images/icons/pet-handling.svg" class="img-fluid transition" width="65" height="65" alt="Pet Handling"> 
                        </a>
                        <p class="text-white text-uppercase mt-4">
                            <a href="#" class="link__white">Pet Handling</a>
                        </p> 
                    </div>
                </div><!--//.col-->
                <div>
                    <div class="service__item" title="Comprehensive Insurance">
                        <a href="#" class="d-block"> 
                            <img src="assets/images/icons/comprehensive.svg" class="img-fluid transition" width="65" height="65" alt="Comprehensive Insurance">
                        </a>
                        <p class="text-white text-uppercase mt-4">
                            <a href="#" class="link__white">Comprehensive Insurance</a>
                        </p> 
                    </div>
                </div><!--//.col-->
                <div>
                    <div class="service__item" title="Provide Services">
                        <a href="#" class="d-block">  
                            <img src="assets/images/icons/provide-service.svg" class="img-fluid transition" width="65" height="65" alt="Provide Services">
                        </a>
                        <p class="text-white text-uppercase mt-4">
                            <a href="#" class="link__white">Provide Services</a>
                        </p> 
                    </div>
                </div><!--//.col--> 
            </div><!--//.row-->
            <div class="text-center mt-4 mt-lg-5">
                <button class="btn">
                    <a class="btn btn-outline-white height rounded-pill fw-bold" href="#">GET DETAILED QUOTE</a>
                </button>
            </div>
        </div>
    </section>
    <!-- Services Wrapper End -->

    <!-- International Movers Malaysia Start -->
    <section class="py-5">
        <div class="container mt-lg-3">
            <h1 class="fs-1 fw-normal text-dark text-center unic_wrap center text-uppercase spacing-x">International Movers Malaysia</h1>
            <p class="text-dark text-center">
                Greetings from Florette Relocations! Are you gearing up to pack for a move? No matter if it’s just around the corner or to a far-off country destination, we’re here to ensure everything goes smoothly. At Florette Relocations, we’re more than just your average moving pack up company; consider us the supportive friends you never knew you needed for this significant transition.
            </p>

            <div class="row gx-4 mt-4 mt-lg-5">
                <div class="col-lg-3 col-md-6">
                    <p class="text-1a text-center text-uppercase">
                        <span class="display-4 fw-medium text-1a d-block mb-3 counter" data-count="25">0</span>
                        Employees In Team 
                    </p> 
                </div><!--//.col-->
                <div class="col-lg-3 col-md-6">
                    <p class="text-1a  text-center text-uppercase">
                        <span class="display-4 fw-medium text-1a d-block mb-3 counter" data-count="3">0</span>
                        Company Vehicles
                    </p> 
                </div><!--//.col-->
                <div class="col-lg-3 col-md-6">
                    <p class="text-1a  text-center text-uppercase">
                        <span class="display-4 fw-medium text-1a d-block mb-3 counter" data-count="86">0</span>
                        Corporates We Serve
                    </p> 
                </div><!--//.col-->
                <div class="col-lg-3 col-md-6">
                    <p class="text-1a  text-center text-uppercase">
                        <span class="display-4 fw-medium text-1a d-block mb-3 counter" data-count="9867">0</span>
                        Projects Done
                    </p> 
                </div><!--//.col-->
            </div><!--//.row-->

            <div class="text-center mt-4 mt-lg-5 pt-lg-4 col-xl-7 mx-auto">
                <img 
                    srcset="assets/images/home/international-movers-sm.webp 575w, assets/images/home/international-movers.webp?v=1 1200w" 
                    src="assets/images/home/international-movers.webp?v=1" 
                    class="img-fluid" width="756" height="343" 
                    sizes="(max-width:575px) 450px"
                    alt="International Movers Malaysia"
                >
            </div>
        </div><!--//.container-->
    </section>
    <!-- International Movers Malaysia End -->

    <!-- Why Choose Us? section Start -->
    <section class="py-5">
        <div class="container mt-lg-3">
            <h2 class="fs-1 text-dark unic_wrap center text-center fw-normal text-uppercase spacing-x">Why Choose Us?</h2>
            <p class="text-dark text-center mb-5">
                Welcome to Florette Relocations, where your journey to a new beginning is our top priority. As more than just a moving company, we position ourselves as your trusted partners through every step of your relocation and moving process. With Florette Relocations, you’ve discovered a team that truly understands the nuances and complexities of the moving industry. Whether you’re transitioning to a new home across town or embarking on an international adventure, our expertise is at your service. Why choose us? Let’s explore the reasons together.
            </p>

            <div class="row g-4 gx-lg-5 pt-lg-3 align-items-center">
                <div class="col-lg-5 col-md-6">
                    <figure>
                        <img src="assets/images/home/choose-us-one.webp" class="img-fluid" width="526" height="355" alt="Why Choose Us?">
                    </figure>
                    <figure>
                        <img src="assets/images/home/choose-us-tow.webp" class="img-fluid" width="526" height="355" alt="Why Choose Us?">
                    </figure>
                </div><!--//.col-->
                <div class="col-lg-7 col-md-6">
                    <div class="d-flex flex-column gap-4 gap-lg-5">
                        <div class="d-flex align-items-start gap-4 gap-lg-5">
                            <div class="why_choose_icon_box"> 
                                <img src="assets/images/icons/decade-moving.svg" class="img-fluid" width="96" height="96" alt="Why Choose Us?">
                            </div>
                            <div class="col">
                                <h3 class="fs-4 fw-medium text-dark mb-3">A Decade of Moving Excellence</h3>
                                <p class="text-dark fs-15">
                                    First off, we’ve been in the game for over ten years. That’s a decade of learning the ins, the outs, and the little details that make a big difference. We’re talking about a commitment to making your move as smooth as silk.
                                </p> 
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-4 gap-lg-5">
                            <div class="why_choose_icon_box"> 
                                <img src="assets/images/icons/global-network.svg" class="img-fluid" width="96" height="96" alt="Why Choose Us?">
                            </div>
                            <div class="col">
                                <h3 class="fs-4 fw-medium text-dark mb-3">Our Global Network
                                    <span class="lead-sm d-block text-dark">Your Passport to a Stress-Free Move</span>
                                </h3>
                                <p class="text-dark fs-15">
                                    Imagine having friends in every corner of the country and the globe ready to help you move. That’s us! Our global network ensures your belongings travel safely, whether you’re moving your house to the next city or across oceans.
                                </p> 
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-4 gap-lg-5">
                            <div class="why_choose_icon_box"> 
                                <img src="assets/images/icons/tailored-just.svg" class="img-fluid" width="96" height="96" alt="Why Choose Us?">
                            </div>
                            <div class="col">
                                <h3 class="fs-4 fw-medium text-dark mb-3">Tailored Just for You
                                    <span class="lead-sm d-block text-dark">Customized Moving Solutions</span> 
                                </h3>
                                <p class="text-dark fs-15">
                                    We know that no two moves are the same. That’s why we listen, really listen, to what you need and tailor our services tailored to fit you perfectly. Whether it’s packing up a studio apartment or relocating an entire office, we’ve got you covered.
                                </p> 
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-4 gap-lg-5">
                            <div class="why_choose_icon_box"> 
                                <img src="assets/images/icons/seal-trust.svg" class="img-fluid" width="96" height="96" alt="Why Choose Us?">
                            </div>
                            <div class="col">
                                <h3 class="fs-4 fw-medium text-dark mb-3">Seal of Trust
                                    <span class="lead-sm d-block text-dark">Certified Excellence</span>
                                </h3>
                                <p class="text-dark fs-15">
                                    We’re not just tooting our own horn here. Our certifications and accreditations are proof that we’re committed to providing top-notch service. It’s like a high-five from the industry saying, “Yep, these folks know their stuff.
                                </p> 
                            </div>
                        </div>

                    </div><!--.//flex-->
                </div><!--//.col-->
            </div><!--//.row-->
             
        </div><!--//.container-->
    </section>
    <!-- Why Choose Us? section End -->

    <!-- Our Success Starts With Them Start -->
    <?php include_once('includes/testimonial-section.inc.php'); ?>
    <!-- Our Success Starts With Them End -->

    <!-- partner Section Start -->
    <div class="py-5">
        <div class="container">
            <div class="owl-carousel partnerCarousel">
                <div class="logo__box text-center">
                    <img 
                        src="assets/images/partners/qatar-airways.webp" 
                        alt="Qatar Airways" width="200" height="100"
                        class="img-fluid mx-auto"
                    >
                </div>
                <div class="logo__box text-center">
                    <img 
                        src="assets/images/partners/singapore-tourism-board.webp" 
                        alt="singapore tourism board" width="200" height="100"
                        class="img-fluid mx-auto"
                    >
                </div>
                <div class="logo__box text-center">
                    <img 
                        src="assets/images/partners/ranbaxy.webp" 
                        alt="ranbaxy" width="200" height="100"
                        class="img-fluid mx-auto"
                    >
                </div>
                <div class="logo__box text-center">
                    <img 
                        src="assets/images/partners/malaysia.webp" 
                        alt="malaysia" width="200" height="100"
                        class="img-fluid mx-auto"
                    >
                </div>
                <div class="logo__box text-center">
                    <img 
                        src="assets/images/partners/shell.webp" 
                        alt="shell" width="200" height="100"
                        class="img-fluid mx-auto"
                    >
                </div>
                <div class="logo__box text-center">
                    <img 
                        src="assets/images/partners/schlumberger.webp" 
                        alt="schlumberger" width="200" height="100"
                        class="img-fluid mx-auto"
                    >
                </div>
                <div class="logo__box text-center">
                    <img 
                        src="assets/images/partners/uco-bank.webp" 
                        alt="uco-bank" width="200" height="100"
                        class="img-fluid mx-auto"
                    >
                </div>
            </div><!--.//carousel-->
        </div><!--.//contaner-->
    </div>
    <!-- partner Section End -->

    <!-- Services Wrapper Start -->
    <section class="services__across scroller py-5" style="background-color: #13314C;">
        <div class="container py-lg-4 py-xxl-5">
            <h2 class="fs-1 fw-normal unic_wrap center text-center text-white text-uppercase">Elevating Moving Services Across Malaysia</h2>
            <p class="text-center text-white mb-4">
                Embarking on a new chapter within Malaysia, country, world or beyond? Florette Movers ensures your transition is seamless and worry-free. Known for unparalleled services, we tailor our approach to meet your diverse moving needs. Our commitment to excellence drives us to constantly refine our offerings, establishing new standards in the relocation sector.
            </p> 
 
        </div><!--//.container-->

        <div class="container-fluid px-sm-5">
            <div class="owl-carousel serviceCarousel">
                <div class="service__card border p-4 w-100">
                    <div class="icons_box d-flex justify-content-center ">
                        <img src="assets/images/icons/international-flight.svg?v=1" class="img-fluid w-auto transition" width="132" height="72" alt="International Relocation Services"> 
                    </div>
                    <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                        <a href="#" class="link__white">International Relocation Services</a>
                    </h3> 
                    <p class="text-center fw-normal text-white small scroll">
                        Moving transcends the mere transfer of items; it’s about transitioning lives and dreams. At Florette Movers, the human aspect of relocation is our priority, guaranteeing the safety and professional handling of your belongings. We utilize superior packing materials to protect your valuables and partner with leading freight and shipping services for secure transportation, making us your go-to choice for moving across borders or to new countries
                    </p> 
                    <div class="bt-3">
                        <a class="text-center text-D7 fw-bold mt-3 d-block" href="#" aria-label="KNOW MORE" title="KNOW MORE">KNOW MORE</a>  
                    </div> 
                </div><!--//.service-->  
                <div class="service__card border p-4 w-100">
                    <div class="icons_box d-flex justify-content-center ">
                        <img src="assets/images/icons/domestic-moves.svg?v=2" class="img-fluid w-auto transition" width="286" height="72" alt="International Relocation Services"> 
                    </div>
                    <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                        <a href="#" class="link__white">Domestic Moves</a>
                    </h3> 
                    <p class="text-center fw-normal text-white small scroll">
                        Our local partner relocation services stand unrivaled, thanks to decades of experience. Our deep local insights ensure we deliver a dependable and smooth moving experience within Malaysia, supported by our employees’ well training and extensive knowledge of locations in the region.
                    </p> 
                    <div class="bt-3">
                        <a class="text-center text-D7 fw-bold mt-3 d-block" href="#" aria-label="KNOW MORE" title="KNOW MORE">KNOW MORE</a>  
                    </div>  
                </div><!--//.service-->   
                <div class="service__card border p-4 w-100">
                    <div class="icons_box d-flex justify-content-center ">
                        <img src="assets/images/icons/warehousing-solutions-pro.svg?v=2" class="img-fluid w-auto transition" width="197" height="72" alt="Warehousing Solutions"> 
                    </div>
                    <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                        <a href="#" class="link__white">Warehousing Solutions</a>
                    </h3> 
                    <p class="text-center fw-normal text-white small scroll">
                        Our warehouses provide a safe haven for your belongings online. Secure and modern, our storage facilities are the ideal place for your valuables online, offering protection until you’re ready to move into your new home.
                    </p> 
                    <div class="bt-3">
                        <a class="text-center text-D7 fw-bold mt-3 d-block" href="#" aria-label="KNOW MORE" title="KNOW MORE">KNOW MORE</a>  
                    </div>  
                </div><!--//.service-->   
                <div class="service__card border p-4 w-100">
                    <div class="icons_box d-flex justify-content-center ">
                        <img src="assets/images/icons/pet-relocation.svg?v=1" class="img-fluid w-auto transition" width="288" height="72" alt="Pet Relocation Services"> 
                    </div>
                    <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                        <a href="#" class="link__white">Pet Relocation Services</a>
                    </h3> 
                    <p class="text-center fw-normal text-white small scroll">
                        Recognizing clients and employees’ pets as part of the family, we offer specialized services tailored to how clients ensure their comfort and safety during the move. Our team is adept at providing the quality care and attention your pets are accustomed to, ensuring a stress-free relocation for your beloved companions.
                    </p> 
                    <div class="bt-3">
                        <a class="text-center text-D7 fw-bold mt-3 d-block" href="#" aria-label="KNOW MORE" title="KNOW MORE">KNOW MORE</a>  
                    </div>  
                </div><!--//.service-->   
            </div><!--//.carousel--> 
        </div><!--.//container__fluid-->
    </section>
    <!-- Services Wrapper End -->

    <!-- The Florette Difference section Start -->
    <section class="py-5">
        <div class="container py-md-4">
            <div class="row g-3 gx-4 align-items-lg-end">
                <div class="col-lg-7">
                    <h2 class="fs-1 text-dark fw-normal unic_wrap text-uppercase text-center text-lg-start">The Florette Difference</h2>
                    <p class="text-dark text-center text-lg-start">
                        Ever caught yourself wondering what sets us apart? It’s our attention to detail. From the meticulous care in packing your treasures to the strategic planning of your move, we’re all about ensuring you feel right at home, even before you’ve unpacked.
                    </p>
                    <div class="">
                        <img src="assets/images/home/florette-difference.webp" class="img-fluid" width="746" height="397" alt="The Florette Difference">
                    </div>
                </div><!--//.col-->
                <div class="col-lg-5">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div class="tailored__moving d-flex align-items-start position-relative p-4 p-md-5">
                                <img 
                                    src="assets/images/home/tailored-moving-solutions-bg.webp"  
                                    alt="Tailored Moving Solutions" width="526" height="283"
                                    class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
                                />
                                <div class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background-color: rgba(20, 49, 76, 0.89);"></div> 

                                <div class="z-index py-md-4">
                                    <h3 class="fs-5 fw-medium text-white text-uppercase mb-3">Tailored Moving Solutions</h3>
                                    <p class="text-white mb-0 fs-15">
                                        Every move is unique, and so are our solutions. Whether you’re relocating your home or business, our team of seasoned professionals is here to support you every step of the way, ensuring a seamless transition.
                                    </p>
                                </div> 
                            </div>
                        </div><!--//.col-->
                        <div class="col-lg-12">
                            <div class="tailored__moving d-flex align-items-start position-relative p-4 p-md-5">
                                <img 
                                    src="assets/images/home/expertise-global-standards.webp"  
                                    alt="The Florette Difference" width="526" height="283"
                                    class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
                                />
                                <div class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background-color: rgba(20, 49, 76, 0.89);"></div> 
                                <div class="z-index py-md-4">
                                    <h3 class="fs-5 fw-medium text-white text-uppercase mb-3">Local Expertise, Global Standards</h3>
                                    <p class="text-white mb-0 fs-15">
                                        Our business roots are deeply embedded in Malaysia, giving customers to us unparalleled local knowledge. Combined with our global standards of excellence, we offer customers a moving experience that’s both locally insightful and internationally acclaimed.
                                    </p>
                                </div>
                                
                            </div>
                        </div><!--//.col-->
                    </div><!--//.row-->
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- The Florette Difference section End -->

     <!-- Global Supply Chain Management Start -->
     <section class="d-flex align-items-start position-relative py-4 py-lg-5">  
        <img 
            src="assets/images/home/global-arth-bg.webp" 
            srcset="
                assets/images/home/global-arth-bg-500.webp 500w,
                assets/images/home/global-arth-bg-800.webp 1000w,
                assets/images/home/global-arth-bg.webp 1200w 
            "
            alt="Global Supply Chain Management"
            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
        />
        <div class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background-color: rgba(255, 255, 255, 0.52)"></div>
        <div class="container my-lg-5 z-index">
            <h2 class="fs-1 text-25 fw-light unic_wrap center text-center text-uppercase"> Global Supply Chain Management</h2>  
            <p class="fs-4 text-25 fw-light text-center">With transport and warehousing resources in Malaysia.</p>

            <div class="col-lg-11 mx-auto text-center text-lg-end mt-4 mt-lg-5">
                <div class="row flex-wrap g-3 gx-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex align-items-center gap-3 supply__card transition p-3 p-sm-4 rounded-4">
                            <h3 class="display-4 text-13 fw-bold mb-0 col text-end"> 
                                <span class="counter" data-count="9867">0</span>
                                <span class="lead d-block fw-normal text-25">Projects Done</span>
                            </h3>
                            <figure class="icon__box mb-0 rounded-pill d-flex justify-content-center align-items-center transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path class="transition" d="M0 80C0 53.5 21.5 32 48 32h96c26.5 0 48 21.5 48 48V96H384V80c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H432c-26.5 0-48-21.5-48-48V160H192v16c0 1.7-.1 3.4-.3 5L272 288h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H272c-26.5 0-48-21.5-48-48V336c0-1.7 .1-3.4 .3-5L144 224H48c-26.5 0-48-21.5-48-48V80z"/></svg>
                            </figure> 
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex align-items-center gap-3 supply__card transition p-3 p-sm-4 rounded-4">
                            <h3 class="display-4 text-13 fw-bold mb-0 col text-end"> 
                                <span class="counter" data-count="25">0</span>
                                <span class="lead d-block fw-normal text-25">Employees In Team</span>
                            </h3>
                            <figure class="icon__box mb-0 rounded-pill d-flex justify-content-center align-items-center transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path class="transition" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                            </figure> 
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex align-items-center gap-3 supply__card transition p-3 p-sm-4 rounded-4">
                            <h3 class="display-4 text-13 fw-bold mb-0 col text-end"> 
                                <span class="counter" data-count="86">0</span>
                                <span class="lead d-block fw-normal text-25">Worldwide Clients</span>
                            </h3>
                            <figure class="icon__box mb-0 rounded-pill d-flex justify-content-center align-items-center transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="transition" d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/></svg>
                            </figure> 
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex align-items-center gap-3 supply__card transition p-3 p-sm-4 rounded-4">
                            <h3 class="display-4 text-13 fw-bold mb-0 col text-end"> 
                                <span class="counter" data-count="3">0</span>
                                <span class="lead d-block fw-normal text-25">Company Vehicles</span>
                            </h3>
                            <figure class="icon__box mb-0 rounded-pill d-flex justify-content-center align-items-center transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                            </figure> 
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex align-items-center gap-3 supply__card transition p-3 p-sm-4 rounded-4">
                            <h3 class="display-4 text-13 fw-bold mb-0 col text-end"> 
                                <span class="counter" data-count="10000">0</span>
                                <span class="lead d-block fw-normal text-25">Happy Customers</span>
                            </h3>
                            <figure class="icon__box mb-0 rounded-pill d-flex justify-content-center align-items-center transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
                            </figure> 
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex align-items-center gap-3 supply__card transition p-3 p-sm-4 rounded-4">
                            <h3 class="display-4 text-13 fw-bold mb-0 col text-end"> 
                                <span class="counter" data-count="10000">0</span>
                                <span class="lead d-block fw-normal text-25">services</span>
                            </h3>
                            <figure class="icon__box mb-0 rounded-pill d-flex justify-content-center align-items-center transition">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M88 216c81.7 10.2 273.7 102.3 304 232H0c99.5-8.1 184.5-137 88-232zm32-152c32.3 35.6 47.7 83.9 46.4 133.6C249.3 231.3 373.7 321.3 400 448h96C455.3 231.9 222.8 79.5 120 64z"/></svg>
                            </figure> 
                        </div>
                    </div><!--//.col-->
                    
                     
                </div><!--//.row--> 
                 
            </div><!--//.col-10--> 
        </div><!--.//container-->
    </section>
    <!-- Global Supply Chain Management End -->

    <!-- Why Choose Florette Movers Malaysia Start -->
    <section class="services__across py-5" style="background-color: #13314C;">
        <div class="container my-lg-3">
            <h2 class="fs-1 fw-normal unic_wrap center text-center text-white text-uppercase">Why Choose Florette Movers Malaysia</h2> 

            <div class="row g-3 gx-2">
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="service__card border p-4 p-md-5 w-100" style="border-color: #ffffff5c !important;">
                        <div class="icons_box d-flex justify-content-center ">
                            <img src="assets/images/icons/international-flight.svg" class="img-fluid transition" width="267" height="145" alt="Personalized Moving Plans"> 
                        </div>
                        
                        <div class="service__title pt-4">
                            <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mb-lg-5">Personalized Moving Plans</h3>
                            <p class="fs-15 text-center text-white">
                                Tailored to fit your unique situation.
                            </p>
                        </div>  
                    </div><!--//.service-->  
                </div><!--//.col-->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="service__card border p-4 p-md-5 w-100" style="border-color: #ffffff5c !important;">
                        <div class="icons_box d-flex justify-content-center">
                            <img src="assets/images/icons/domestic-moves.svg" class="img-fluid transition" width="267" height="145" alt="Comprehensive Services">  
                        </div>
                        
                        <div class="service__title mt-4">
                            <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mb-lg-5">Comprehensive Services</h3>
                            <p class="fs-15 text-center text-white">
                                From packing to insurance, we’ve got you covered.
                            </p>
                        </div>   
                    </div><!--//.service-->  
                </div><!--//.col-->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="service__card border p-4 p-md-5 w-100" style="border-color: #ffffff5c !important;">
                        <div class="icons_box d-flex justify-content-center">
                            <img src="assets/images/icons/experienced-team.svg" class="img-fluid transition" width="267" height="145" alt="Experienced Team"> 
                        </div>
                        
                        <div class="service__title mt-4">
                            <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mb-lg-5">Experienced Team</h3>
                            <p class="fs-15 text-center text-white">
                                Professionals dedicated to making your move smooth.
                            </p>
                        </div>   
                    </div><!--//.service-->  
                </div><!--//.col--> 
            </div><!--//.row--> 
        </div><!--//.container-->
    </section>
    <!-- Why Choose Florette Movers Malaysia End -->

    <!--  Your Gateway To A Seamless Move Start -->
    <section class="py-5" style="background-color: rgba(19, 49, 76, 0.06);">
        <div class="container my-lg-4">
            <div class="row g-4 gx-lg-5">
                <div class="col-lg-5 order-lg-2">
                    <img 
                        src="assets/images/home/moving.webp"
                        width="512" height="721" 
                        alt="Florette Movers Malaysia"
                        class="img-fluid"
                    >
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="mb-4">
                        <h2 class="fs-1 text-dark fw-normal unic_wrap text-uppercase">Florette Movers Malaysia -Your Gateway to a Seamless Move</h2>
                        <div class="info__card p-3 p-lg-4">
                            <h3 class="fs-5 text-dark fw-normal text-uppercase mb-3"> Large Global Network Of Movers</h3>
                            <p class="text-dark fs-15">
                                Embarking on an international moving company or house move journey from Malaysia? Let Florette Movers be your guide to a seamless and secure international moving company experience. With an internationally extensive network spanning over 6000 locations globally, we ensure your move is efficient, smooth, and hassle-free.
                            </p>
                        </div> 
                    </div>
                    <div class="mb-4"> 
                        <div class="info__card p-3 p-lg-4">
                            <h3 class="fs-5 text-dark fw-normal text-uppercase">Expert Handling Of Valuable And Fragile Items</h3>
                            <h4 class="lead-sm text-dark fw-normal mb-3">Can Florette Movers Malaysia Safeguard Your Treasures?</h4>
                            <p class="text-dark fs-15">
                                Absolutely! Your peace of mind is our priority. We employ premium packing materials, equipment and techniques to shield your valuable and fragile items during transit. Opting for the same equipment, training and right insurance coverage with a company as us adds an extra layer of security, ensuring your valuables are protected every step of the way.
                            </p>
                        </div> 
                    </div>
                    <div class="mb-4"> 
                        <div class="info__card p-3 p-lg-4">
                            <h3 class="fs-5 text-dark fw-normal text-uppercase">Transparent Pricing For Your Move</h3>
                            <h4 class="lead-sm text-dark fw-normal mb-3">What Influences the Cost of Moving Services in Malaysia?</h4>
                            <p class="text-dark fs-15">
                                Curious for details about the factors shaping your moving costs? From the volume of items to pack and deliver to the timing details of your request to move your house, several elements play a role. Avoid surprises by getting the details and a personalized free quote, from Florette Movers Malaysia, tailored to your specific needs and preferences.
                            </p>
                        </div> 
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!--  Your Gateway To A Seamless Move End -->

    <!-- How We Work section Start -->
    <section class="scroller py-5" style="background-color: #13314C;">
        <div class="container py-md-4">
            <h2 class="fs-1 fw-normal unic_wrap center text-center text-white text-uppercase">How We Work</h2>
            <p class="text-center text-white mb-4">
                Embarking on a move can be a monumental task, but with Florette Movers Malaysia, you’re in capable hands. Our approach is tailored, transparent, and designed to put your needs first. Here’s how we turn the daunting into the doable, step by step.
            </p> 
 
        </div><!--//.container-->

        <div class="container-fluid px-sm-5 mb-4">
            <div class="owl-carousel serviceCarousel">
                <div class="service__card border p-4 w-100">
                    <div class="icons_box d-flex justify-content-center ">
                        <img src="assets/images/icons/international-flight.svg?v=1" class="img-fluid w-auto transition" width="132" height="72" alt="International Relocation Services"> 
                    </div>
                    <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                        Initial Consultation: Understanding Your Unique Needs
                    </h3> 
                    <p class="text-center fw-normal text-white small scroll">
                        Your journey begins with a personal consultation. Why? Because every move is as unique as you are. We dive deep to understand your specific needs, preferences, and concerns. This initial chat sets the stage for a move that feels like it's designed just for you.
                    </p>  
                </div><!--//.service-->  
                <div class="service__card border p-4 w-100">
                    <div class="icons_box d-flex justify-content-center ">
                        <img src="assets/images/icons/domestic-moves.svg?v=2" class="img-fluid w-auto transition" width="286" height="72" alt="International Relocation Services"> 
                    </div>
                    <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                        Crafting Your Custom Plan
                    </h3> 
                    <h4 class="text-white lead-sm text-center">A Blueprint for Success</h4> 
                    <p class="text-center fw-normal text-white small scroll">
                        Next, we roll up our sleeves and get to work on your custom moving plan. This isn't just about logistics and timelines (though we've got those down to an art); it's about crafting a plan that aligns with your life, your schedule, and your expectations. From packing to paperwork, we've got every detail covered.
                    </p>  
                </div><!--//.service-->   
                <div class="service__card border p-4 w-100">
                    <div class="icons_box d-flex justify-content-center ">
                        <img src="assets/images/icons/warehousing-solutions-pro.svg?v=2" class="img-fluid w-auto transition" width="197" height="72" alt="Warehousing Solutions"> 
                    </div>
                    <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                        Execution: Where Plans Meet Precision
                    </h3> 
                    <h4 class="text-white lead-sm text-center">Moving Day and Beyond</h4>
                    <p class="text-center fw-normal text-white small scroll">
                        With the plan in place, it's time for action. Our team of skilled international movers and packers takes the lead, handling your belongings with the utmost care and efficiency. We're talking precision packing, safe transportation, and meticulous attention to detail. And because we know the importance of staying connected, we keep you updated every step of the way.
                    </p>   
                </div><!--//.service-->   
                <div class="service__card border p-4 w-100">
                    <div class="icons_box d-flex justify-content-center ">
                        <img src="assets/images/icons/pet-relocation.svg?v=1" class="img-fluid w-auto transition" width="288" height="72" alt="Pet Relocation Services"> 
                    </div>
                    <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                        Aftercare: Supporting You Post-Move 
                    </h3> 
                    <h4 class="text-white lead-sm text-center">Seamless Transition into Your New Space</h4>
                    <p class="text-center fw-normal text-white small scroll">
                        Our commitment doesn't end when the last box is unpacked. Our aftercare support ensures you settle into your new space with ease. Whether it's additional services you need or just some friendly advice, we're here for you. Because at Florette Movers Malaysia, your move is more than a task on our checklist—it's the start of your next chapter.
                    </p>   
                </div><!--//.service-->   
            </div><!--//.carousel--> 
        </div><!--.//container__fluid-->
    </section>
    <!-- How We Work section End -->

    <!-- Latest News section Start -->
    <section class="py-5">
        <div class="container mt-lg-3">
            <h2 class="fs-1 text-dark fw-normal unic_wrap center text-center text-uppercase">Latest News</h2>
            <p class="text-center" style="color: #020202;">Connecting cargo markets and the world</p>
            <div class="row g-4 gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6">
                    <div class="bg-white overflow-hidden p-2">
                        <a href="#" class="d-block thumbnail">
                            <img src="blog/images/demo/Driving-Licence.webp" class="img-fluid w-100" width="362" height="100" alt="Driving Licence">
                        </a>
                        <div class="bg-white pt-4">
                            <p class="fw-medium">
                                How to convert India license to Malayasia ?
                            </p>
                        </div>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-3 col-md-6">
                    <div class="bg-white overflow-hidden p-2">
                        <a href="#" class="d-block thumbnail">
                            <img src="blog/images/demo/Driving-Licence.webp" class="img-fluid w-100" width="362" height="100" alt="Driving Licence">
                        </a>
                        <div class="bg-white pt-4">
                            <p class="fw-medium">
                                Customs regulations in India
                            </p>
                        </div>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-3 col-md-6">
                    <div class="bg-white overflow-hidden p-2">
                        <a href="#" class="d-block thumbnail">
                            <img src="blog/images/demo/Driving-Licence.webp" class="img-fluid w-100" width="362" height="100" alt="Driving Licence">
                        </a>
                        <div class="bg-white pt-4">
                            <p class="fw-medium">
                                Malaysia, Indonesia, Singapore agree to strengthen coordination in Malacca Strait
                            </p>
                        </div>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-3 col-md-6">
                    <div class="bg-white overflow-hidden p-2">
                        <a href="#" class="d-block thumbnail">
                            <img src="blog/images/demo/Driving-Licence.webp" class="img-fluid w-100" width="362" height="100" alt="Driving Licence">
                        </a>
                        <div class="bg-white pt-4">
                            <p class="fw-medium">
                                Immigration Update – Malaysia
                            </p>
                        </div>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
            <div class="text-center mt-5">
                <button type="button" class="btn btn-outline-danger height px-4 rounded-pill">VIEW ALL</button> 
            </div> 
        </div><!--//.container-->
    </section>
    <!-- Latest News section End -->






    <!-- FAQ section Start -->
    <section class="py-4 py-md-5">
        <div class="container">
        <h2 class="fs-1 text-dark fw-normal unic_wrap center text-center text-uppercase">FAQ</h2> 
            <div class="faq__wrapper mx-auto"> 
                <div class="row g-0 g-lg-3">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="accordion accordion-flush no__icons mt-3 mt-lg-4 mx-auto" id="accordionFaq1">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="flushProcess1">
                                    <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSales1" aria-expanded="false" aria-controls="flushSales1">
                                        Who are the top-rated movers in Malaysia for international relocation?
                                    </button>
                                </h3>
                                <div id="flushSales1" class="accordion-collapse collapse" aria-labelledby="flushProcess1" data-bs-parent="#accordionFaq1">
                                    <div class="accordion-body">
                                        <p>We're proud to be among the top-rated, offering seamless international relocation services with a personal touch</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="flushProcess2">
                                    <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSales2" aria-expanded="false" aria-controls="flushSales2">
                                        What are the best international moving companies in Malaysia for overseas transfers?
                                    </button>
                                </h3>
                                <div id="flushSales2" class="accordion-collapse collapse" aria-labelledby="flushProcess2" data-bs-parent="#accordionFaq1">
                                    <div class="accordion-body">
                                        <p>Look for companies with extensive global networks, like ours, ensuring a smooth transfer anywhere in the world.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="flushProcess3">
                                    <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSales3" aria-expanded="false" aria-controls="flushSales3">
                                        How to find reliable international movers in Kuala Lumpur for a smooth move?
                                    </button>
                                </h3>
                                <div id="flushSales3" class="accordion-collapse collapse" aria-labelledby="flushProcess3" data-bs-parent="#accordionFaq1">
                                    <div class="accordion-body">
                                        <p>Check for movers with stellar reviews and a proven track record in Kuala Lumpur, much like our esteemed services.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item ">
                                <h3 class="accordion-header" id="flushProcess4">
                                    <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSales4" aria-expanded="false" aria-controls="flushSales4">
                                        Which international movers and packers in Malaysia offer comprehensive moving services?
                                    </button>
                                </h3>
                                <div id="flushSales4" class="accordion-collapse collapse" aria-labelledby="flushProcess4" data-bs-parent="#accordionFaq1">
                                    <div class="accordion-body">
                                        <p>We offer a full suite of services, from packing to customs clearance, making us a go-to choice for comprehensive needs.</p> 
                                    </div>
                                </div>
                            </div> 
                            <div class="accordion-item ">
                                <h3 class="accordion-header" id="flushProcess5">
                                    <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSales5" aria-expanded="false" aria-controls="flushSales5">
                                        Affordable international packers and movers in Kuala Lumpur with excellent reviews?
                                    </button>
                                </h3>
                                <div id="flushSales5" class="accordion-collapse collapse" aria-labelledby="flushProcess5" data-bs-parent="#accordionFaq1">
                                    <div class="accordion-body">
                                        <p>Our competitive pricing and glowing testimonials reflect our commitment to affordability and quality.</p> 
                                    </div>
                                </div>
                            </div> 
                        </div><!--.//accordion--> 
                    </div><!--.//col-->  

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="accordion accordion-flush no__icons mt-3 mt-lg-4 mx-auto" id="accordionFaq2">
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="flushPro1">
                                    <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSa1" aria-expanded="false" aria-controls="flushSa1">
                                        Comparing costs of international moving companies in Malaysia for budget planning?
                                    </button>
                                </h3>
                                <div id="flushSa1" class="accordion-collapse collapse" aria-labelledby="flushPro1" data-bs-parent="#accordionFaq2">
                                    <div class="accordion-body">
                                        <p>We recommend getting personalized quotes from us for transparent and detailed budget planning.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="flushPro2">
                                    <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSa2" aria-expanded="false" aria-controls="flushSa2">
                                        Experienced international movers in Kuala Lumpur specializing in India relocations?
                                    </button>
                                </h3>
                                <div id="flushSa2" class="accordion-collapse collapse" aria-labelledby="flushPro2" data-bs-parent="#accordionFaq2">
                                    <div class="accordion-body">
                                        <p>Our expertise in India relocations is unmatched, thanks to our dedicated team and extensive experience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="flushPro3">
                                    <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSa3" aria-expanded="false" aria-controls="flushSa3">
                                        International movers and packers in Malaysia with storage solutions?
                                    </button>
                                </h3>
                                <div id="flushSa3" class="accordion-collapse collapse" aria-labelledby="flushPro3" data-bs-parent="#accordionFaq2">
                                    <div class="accordion-body">
                                        <p>Yes, we provide secure and flexible storage solutions for your belongings during the transition.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item ">
                                <h3 class="accordion-header" id="flushPro4">
                                    <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSa4" aria-expanded="false" aria-controls="flushSa4">
                                        Customs clearance support by international packers and movers in Kuala Lumpur?
                                    </button>
                                </h3>
                                <div id="flushSa4" class="accordion-collapse collapse" aria-labelledby="flushPro4" data-bs-parent="#accordionFaq2">
                                    <div class="accordion-body">
                                        <p>Absolutely, our team ensures smooth customs clearance, guiding you through every paperwork detail.</p> 
                                    </div>
                                </div>
                            </div> 
                            <div class="accordion-item ">
                                <h3 class="accordion-header" id="flushPro5">
                                    <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSa5" aria-expanded="false" aria-controls="flushSa5">
                                        Eco-friendly packing options from international moving companies in Malaysia?
                                    </button>
                                </h3>
                                <div id="flushSa5" class="accordion-collapse collapse" aria-labelledby="flushPro5" data-bs-parent="#accordionFaq2">
                                    <div class="accordion-body">
                                        <p>We're committed to sustainability, offering eco-friendly packing options to minimize environmental impact.</p> 
                                    </div>
                                </div>
                            </div> 
                        </div><!--.//accordion--> 
                    </div><!--.//col-->  
                </div><!--.//row-->
            </div><!--.//faq__wrapper-->
        </div><!--.//container-->
    </section>  
    <!-- FAQ section End -->

































 
     
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
    <?php $folder='root'; include_once('includes/counter-script.inc.php'); ?> 
    
    
</body>
</html>

  
