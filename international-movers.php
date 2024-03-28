
<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>FAQs | Florette Relocations | Moving service company</title>
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
                src="assets/images/services/services-bg.webp" 
                srcset="
                    assets/images/services/services-bg-sm.webp 576w,
                    assets/images/services/services-bg-md.webp 1000w,
                    assets/images/services/services-bg.webp 1200w 
                "
                alt="<?php echo $site_name;?>" width="1903" height="448"
                class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
            />
            <div class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background-color: rgba(0, 0, 0, 0.54);"></div>
             
        </header>
        <!-- Header Wrapper End -->

        <!-- form section Start -->
        <div class="contact__wrapper national_mover"> 
            <div class="container z-index">
                <div class="receive__quote national_wrap py-3 py-lg-4 px-4 px-lg-5">
                    <p class="lead fw-normal text-white text-center">Receive a quote tailored to your unique needs and experience moving made easy.</p>
                    <form action="#" class="row g-2">
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
        </div>
        <!-- form section End -->

        <!--  Welcome To The Threshold Start  -->
        <section class="pt-5 pt-lg-4 pb-5">
            <div class="container">
                <div class="row g-4 gx-lg-5 align-items-center">
                    <div class="col-lg-6 order-2">

                        <img 
                            src="assets/images/services/welcome-threshold.webp" 
                            srcset="
                                assets/images/services/welcome-threshold-sm.webp 576w,
                                assets/images/services/welcome-threshold-md.webp 1000w,
                                assets/images/services/welcome-threshold.webp 1200w 
                            "
                            alt="Welcome To The Threshold Of New Beginnings" width="624" height="620"
                            class="img-fluid w-100" 
                        /> 
                    </div><!--//.col-->
                    <div class="col-lg-6 order-1">
                        <h2 class="fs-1 text-08 fw-light text-uppercase unic_wrap">Welcome To The Threshold Of New Beginnings</h2>
                        <p class="text-dark lead-sm">
                            In the vast and vibrant landscape of Malaysia, amidst the bustling cities and serene countryside, stands Florette Relocations, your gateway to a seamless world beyond borders. We’re not just another international relocation and moving company though; we are storytellers of your next chapter, facilitators of your dreams. Specializing in crafting journeys that are as rewarding as the destination, we offer comprehensive international moving services designed to make transitions smooth, secure, and stress-free. Whether you’re an individual embarking on a new adventure, a family weaving memories in a new locale, or a corporation expanding its horizon, we stand by you, ensuring every step towards your new destination is a step in the right direction. Discover why our blend of expertise, dedication, and personalized care has earned us the reputation as Malaysia’s premier international movers.
                        </p>
                    </div><!--//.col-->
                </div><!--//.row-->
            </div><!--//.container-->
        </section>
        <!--  Welcome To The Threshold End  -->

        <!-- Why Choose Us For Your International Start -->
        <section class="py-5" style="background-color: rgba(19, 49, 76, 0.09);">
            <div class="container"> 
                <div class="row g-4 gx-lg-5 pt-lg-3 align-items-center">
                    <div class="col-lg-5">
                        <div class="row g-2 g-sm-3 g-xl-4">

                            <figure class="col-6 col-lg-12 mb-0">
                                <img src="assets/images/services/your-international.webp" class="img-fluid" width="526" height="355" alt="Service">
                            </figure>
                            <figure class="col-6 col-lg-12 mb-0">
                                <img src="assets/images/home/choose-us-tow.webp" class="img-fluid" width="526" height="355" alt="Service">
                            </figure>
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-7">
                        <h2 class="fs-1 text-08 unic_wrap fw-light text-uppercase spacing-x mt-3 mt-lg-0">Why Choose Us For Your International Relocation</h2>
                        <p class="text-dark lead-sm mb-5">
                            Moving internationally is a thread that weaves together new opportunities and dreams in the tapestry of your life. Selecting the right partner is crucial for a smooth transition when you are at this crossroads. This is a brief look at why you should choose us to elevate your relocation experience.
                        </p>

                        <div class="d-flex flex-column gap-4 gap-lg-5">
                            <div class="d-flex align-items-start gap-4 gap-lg-5">
                                <div class="why_choose_icon_box"> 
                                    <img src="assets/images/icons/decade-moving.svg" class="img-fluid" width="96" height="96" alt="Decades of Experienc">
                                </div>
                                <div class="col">
                                    <h3 class="fs-4 fw-normal text-08 mb-2">
                                        <a href="#">Decades of Experienc</a>
                                    </h3>
                                    <p class="lead-sm text-dark">
                                        Our legacy is built on robust expertise, ensuring every move is a testament to our seasoned journey in international relocations.
                                    </p> 
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-4 gap-lg-5">
                                <div class="why_choose_icon_box"> 
                                    <img src="assets/images/icons/global-network.svg" class="img-fluid" width="96" height="96" alt="Global Network">
                                </div>
                                <div class="col">
                                    <h3 class="fs-4 fw-normal text-08 mb-2"> 
                                        <a href="#">Global Network</a>
                                    </h3>
                                    <p class="lead-sm text-dark">
                                        Our alliances with the world’s top relocation firms mean your move is globally supported yet locally executed with finesse.
                                    </p> 
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-4 gap-lg-5">
                                <div class="why_choose_icon_box"> 
                                    <img src="assets/images/icons/tailored-just.svg" class="img-fluid" width="96" height="96" alt="Customized Solutions">
                                </div>
                                <div class="col">
                                    <h3 class="fs-4 fw-normal text-08 mb-2"> 
                                        <a href="#">Customized Solutions</a>
                                    </h3>
                                    <p class="lead-sm text-dark">
                                        From the corporate magnate to the cozy household, our services are meticulously crafted around your unique narrative.
                                    </p> 
                                </div>
                            </div> 
                        </div><!--.//flex-->
                    </div><!--//.col-->
                </div><!--//.row--> 
            </div><!--//.container-->
        </section>
        <!-- Why Choose Us For Your International End -->

        <!-- Our Comprehensive International Start -->
        <section class="services__across scroller py-5" style="background-color: #13314C;">
            <div class="container py-lg-4 py-xxl-5">
                <h2 class="fs-1 fw-light unic_wrap center text-center text-white text-uppercase">Our Comprehensive International Moving Services</h2>
                <p class="col-lg-10 mx-auto text-center text-white mb-4">
                    Embarking on a new chapter within Malaysia, country, world or beyond? Florette Movers ensures your transition is seamless and worry-free. Known for unparalleled services, we tailor our approach to meet your diverse moving needs. Our commitment to excellence drives us to constantly refine our offerings, establishing new standards in the relocation sector.
                </p> 
    
            </div><!--//.container-->

            <div class="container-fluid px-sm-5">
                <div class="owl-carousel serviceCarousel">
                    <div class="service__card border p-4 w-100">
                        <div class="icons_box d-flex justify-content-center ">
                            <img src="assets/images/icons/international-flight.svg?v=1" class="img-fluid w-auto transition" width="132" height="72" alt="Corporate Relocation"> 
                        </div>
                        <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                            <a href="#" class="link__white">Corporate Relocation</a>
                        </h3> 
                        <p class="text-center fw-normal text-white small scroll">
                            In the dynamic sphere of global business, corporate relocations signify growth and new ventures. We specialize in these transitions, offering end-to-end services designed to relocate your business with minimal disruption. Our approach ensures that your operations move as smoothly as your workforce, setting a new benchmark for corporate moving services.
                        </p>  
                    </div><!--//.service-->  
                    <div class="service__card border p-4 w-100">
                        <div class="icons_box d-flex justify-content-center ">
                            <img src="assets/images/icons/domestic-moves.svg?v=2" class="img-fluid w-auto transition" width="286" height="72" alt="Office Moving"> 
                        </div>
                        <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                            <a href="#" class="link__white">Office Moving</a>
                        </h3> 
                        <p class="text-center fw-normal text-white small scroll">
                            Office moves are pivotal moments that require precision and efficiency. Our seamless office moving services are crafted to get your business back on its feet without skipping a beat. From strategic packing to meticulous equipment setup and cleaning, our experts cover every detail, ensuring a swift transition to your new commercial space.
                        </p>  
                    </div><!--//.service-->   
                    <div class="service__card border p-4 w-100">
                        <div class="icons_box d-flex justify-content-center ">
                            <img src="assets/images/icons/warehousing-solutions-pro.svg?v=2" class="img-fluid w-auto transition" width="197" height="72" alt="Pet Relocation"> 
                        </div>
                        <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                            <a href="#" class="link__white">Pet Relocation</a>
                        </h3> 
                        <p class="text-center fw-normal text-white small scroll">
                            We understand that pets are family, and moving without them is unthinkable. Our pet relocation services are built on a foundation of care and safety, guaranteeing to provide an stress-free journey for your furry companions. With us, every pet receives the royal treatment, ensuring they arrive safe and sound at your new doorstep.
                        </p>  
                    </div><!--//.service-->   
                    <div class="service__card border p-4 w-100">
                        <div class="icons_box d-flex justify-content-center ">
                            <img src="assets/images/icons/pet-relocation.svg?v=1" class="img-fluid w-auto transition" width="288" height="72" alt="House Moving"> 
                        </div>
                        <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                            <a href="#" class="link__white">House Moving</a>
                        </h3> 
                        <p class="text-center fw-normal text-white small scroll">
                            House moving is more than transferring belongings; it’s about moving your life. As the best international movers and packers in Kuala Lumpur, we hold your trust in high regard, ensuring every item, from the heirloom to the hallmark, is safely transported to your newanhome. Our house moving, storage and pack up services are a testament to our commitment to your peace of mind.
                        </p>  
                    </div><!--//.service-->   
                </div><!--//.carousel--> 
                <p class="col-lg-9 mx-auto text-white text-center my-4">
                    Choosing our international network of moving and storage services means opting to provide you for a seamless transition guided by expertise and nurtured by genuine care. Let us handle the complexities of your move, so you can focus on the excitement of embarking on a new chapter.
                </p>
            </div><!--.//container__fluid-->
        </section>
        <!-- Our Comprehensive International End -->

        <!-- The Florette Process Start -->
        <section class="py-5">
            <div class="container">
                <h2 class="fs-1 fw-light text-08 unic_wrap center text-center text-uppercase">The Florette Process</h2>
                <p class="lead-sm text-dark text-center mb-4 mb-lg-5">
                    Embarking on an international move can seem like navigating through a maze of logistics and regulations. That’s where The Florette Process shines, transforming a complex journey into a seamless adventure. Here’s a glance at how we ensure your move is not just successful, but also a peace-of-mind experience from start to finish.
                </p>

                <div class="row g-4 gx-lg-3 gy-lg-3">
                    <div class="col-lg-6 d-flex">
                        <div class="delivery__card w-100">
                            <div class="d-flex align-items-start gap-5">
                                <img src="assets/images/icons/consultation.svg" class="img-fluid" width="96" height="96" alt="Initial Consultation">
                                <div class="title">
                                    <h3 class="fs-4 text-08 fw-medium">Initial Consultation
                                        <span class="d-block lead-sm text-08 fw-normal my-2">Your Needs, Our Priority</span>
                                    </h3>
                                    <p class="text-dark">
                                        Our journey together begins with an Initial Consultation. We dive deep into understanding your unique needs, aspirations, and concerns. This step is about laying a solid foundation for the move, ensuring we’re aligned with your expectations and prepared to tailor our services to fit your exact requirements.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-6 d-flex">
                        <div class="delivery__card w-100">
                            <div class="d-flex align-items-start gap-5">
                                <img src="assets/images/icons/tailored-just.svg" class="img-fluid" width="96" height="96" alt="Packing and Transportation">
                                <div class="title">
                                    <h3 class="fs-4 text-08 fw-medium">Packing and Transportation
                                        <span class="d-block lead-sm text-08 fw-normal my-2">Secure and Stress-Free</span>
                                    </h3>
                                    <p class="text-dark">
                                        The heart of a smooth move lies in Packing and Transportation. We employ only the highest quality packing materials coupled with the expertise of our skilled and certified international movers and packers crew. This entire process ensures every item, from the most fragile items and most robust to the delicately sentimental, is securely packed for transport, ready to withstand the rigors of travel.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-6 d-flex">
                        <div class="delivery__card w-100">
                            <div class="d-flex align-items-start gap-5">
                                <img src="assets/images/icons/task.svg" class="img-fluid" width="96" height="96" alt="Planning and Coordination">
                                <div class="title">
                                    <h3 class="fs-4 text-08 fw-medium">Planning and Coordination
                                        <span class="d-block lead-sm text-08 fw-normal my-2">Crafting Your Personalized Blueprint</span>
                                    </h3>
                                    <p class="text-dark">
                                        With valuable insights from the initial consultation, we move to Planning and Coordination. Our team, renowned for their expertise in international relocation services, crafts a custom relocation plan. This stage of moving process is where our dedicated team of detailed coordination ensures every aspect of your move, from timeline to logistics, is meticulously planned with our top-notch relocation company in Malaysia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!--//.col-->
                    <div class="col-lg-6 d-flex">
                        <div class="delivery__card w-100">
                            <div class="d-flex align-items-start gap-5">
                                <img src="assets/images/icons/delivery-truck.svg" class="img-fluid" width="96" height="96" alt="Customs and Delivery">
                                <div class="title">
                                    <h3 class="fs-4 text-08 fw-medium">Customs and Delivery
                                        <span class="d-block lead-sm text-08 fw-normal my-2">Navigating the Final Stretch</span>
                                    </h3>
                                    <p class="text-dark">
                                        Finally, our entire moving process together, culminates with Customs and Delivery. This crucial phase of moving process involves navigating the often-complex world of customs clearance. Our seasoned team ensures all paperwork is in pristine order, advocating for a swift customs process. The culmination of our journey is the timely delivery of your belongings to your new destination, marking a successful end to your international relocation adventure.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!--//.col-->
                </div><!--//.row-->
            </div><!--//.container-->
        </section>
        <!-- The Florette Process End -->

        <!-- Meet Our Experts Start -->
        <section class="py-3 pb-5 py-lg-5">
            <div class="container">
                <h2 class="fs-1 fw-light unic_wrap center text-center text-08 text-uppercase">Meet Our Experts</h2>
                <p class="col-lg-10 mx-auto text-center text-dark mb-4">
                    Introduction to our dedicated team of relocation experts and employees and their role in providing the world the best international relocation services. This section underscores our credibility and expertise in the field.
                </p> 
    
                <div class="owl-carousel owlourExperts">
                    <div class="our__experts">
                        <img src="assets/images/services/experts-1.webp" class="img-fluid" width="" height="" alt="Meet Our Experts">
                    </div> 
                    <div class="our__experts">
                        <img src="assets/images/services/experts-2.webp" class="img-fluid" width="" height="" alt="Meet Our Experts">
                    </div> 
                    <div class="our__experts">
                        <img src="assets/images/services/experts-3.webp" class="img-fluid" width="" height="" alt="Meet Our Experts">
                    </div> 
                    <div class="our__experts">
                        <img src="assets/images/services/experts-4.webp" class="img-fluid" width="" height="" alt="Meet Our Experts">
                    </div> 
                    <div class="our__experts">
                        <img src="assets/images/services/experts-1.webp" class="img-fluid" width="" height="" alt="Meet Our Experts">
                    </div> 
                    <div class="our__experts">
                        <img src="assets/images/services/experts-2.webp" class="img-fluid" width="" height="" alt="Meet Our Experts">
                    </div> 
                    <div class="our__experts">
                        <img src="assets/images/services/experts-3.webp" class="img-fluid" width="" height="" alt="Meet Our Experts">
                    </div> 
                    <div class="our__experts">
                        <img src="assets/images/services/experts-4.webp" class="img-fluid" width="" height="" alt="Meet Our Experts">
                    </div> 
                </div><!--//.owl-carousel-->
            </div><!--//.container-->
        </section>
        <!-- Meet Our Experts End -->

        <!-- Why Trust Florette Relocations? Start -->
        <section class="services__across scroller py-5" style="background-color: #13314C;">
            <div class="container mt-lg-3">
                <h2 class="fs-1 fw-light unic_wrap center text-center text-white text-uppercase">Why Trust Florette Relocations?</h2>
                <p class="col-lg-10 mx-auto text-center text-white mb-4">
                    In the vast landscape of international relocation services, choosing a partner for your journey is no small decision. It’s about entrusting the memories embedded in your belongings and the hopes for your future to someone who understands the weight of what that means. Here’s why Florette Relocations stands out as a beacon of trust and excellence in a sea of options.
                </p> 
    
            </div><!--//.container-->

            <div class="container-fluid px-sm-5">
                <div class="owl-carousel serviceCarousel">
                    <div class="service__card border p-4 w-100">
                        <div class="icons_box d-flex justify-content-center ">
                            <img src="assets/images/icons/tracking.svg?v=1" class="img-fluid w-auto transition" width="72" height="72" alt="Our Industry Credentials Speak Volumes"> 
                        </div>
                        <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                            <a href="#" class="link__white">Our Industry Credentials Speak Volumes</a>
                        </h3> 
                        <p class="text-center fw-normal text-white small scroll">
                            At Florette Relocations, our dedication to excellence is not just a promise; it’s proven by our industry accreditations and certification. We pride ourselves on meeting and surpassing the standards set by leading global relocation associations. These accreditations and certification are a testament to our commitment to quality, consistency, and customer satisfaction, ensuring that every move we manage adheres to the highest industry benchmarks
                        </p>  
                    </div><!--//.service-->  
                    <div class="service__card border p-4 w-100">
                        <div class="icons_box d-flex justify-content-center ">
                            <img src="assets/images/icons/medal.svg?v=2" class="img-fluid w-auto transition" width="72" height="72" alt="Recognized Excellence Through Awards"> 
                        </div>
                        <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                            <a href="#" class="link__white">Recognized Excellence Through Awards</a>
                        </h3> 
                        <p class="text-center fw-normal text-white small scroll">
                            Recognition in the form of awards from esteemed organizations within the relocation and moving industry further shines a light on our continuous efforts to excel the moving industry. These accolades reflect our innovative approach, exceptional service, quality, and the positive feedback from countless satisfied clients who have made successful transitions with our help. They underscore our position as a leader in the field, always striving to elevate the moving experience.
                        </p>  
                    </div><!--//.service-->   
                    <div class="service__card border p-4 w-100">
                        <div class="icons_box d-flex justify-content-center ">
                            <img src="assets/images/icons/man-sucess.svg?v=2" class="img-fluid w-auto transition" width="72" height="72" alt="Ranked Among The Best Relocation Companies"> 
                        </div>
                        <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                            <a href="#" class="link__white">Ranked Among The Best Relocation Companies</a>
                        </h3> 
                        <p class="text-center fw-normal text-white small scroll">
                            Being listed among the best relocation companies is not just a badge of honor; it’s a responsibility we take seriously right moving company. This ranking is based on our comprehensive service offerings, from meticulous planning and packing to seamless customs clearance and settling-in services. It’s also a reflection of the trust our clients place in us right moving company, a trust we aim to uphold and exceed with every move we facilitate.
                        </p>  
                    </div><!--//.service-->   
                    <div class="service__card border p-4 w-100">
                        <div class="icons_box d-flex justify-content-center ">
                            <img src="assets/images/icons/job-action.svg?v=1" class="img-fluid w-auto transition" width="72" height="72" alt="Why Trust Florette Relocations?"> 
                        </div>
                        <h3 class="fs-5 fw-medium text-center text-white text-uppercase mb-3 mt-4 title">
                            <a href="#" class="link__white">Why Trust Florette Relocations?</a>
                        </h3> 
                        <p class="text-center fw-normal text-white small scroll">
                            Because here, we understand that we’re not just moving your belongings; we’re moving your life. With our strong foundation of credentials, industry recognition, and a solid track record of success, we offer peace of mind that your international relocation will be as smooth and stress-free as possible. Let us show you the way home, no matter where in the world that may be.
                        </p>  
                    </div><!--//.service-->   
                </div><!--//.carousel-->  
            </div><!--.//container__fluid-->
        </section>
        <!-- Why Trust Florette Relocations? End -->

        <!-- Client Testimonials And Success Start -->
        <section class="py-5" style="background-color: rgba(12, 34, 131, 0.1);">
            <div class="container">
                <h2 class="fs-1 fw-light unic_wrap center text-center text-14 text-uppercase">Client Testimonials And Success Stories</h2>
                <p class="col-lg-9 mx-auto text-center text-21 mb-4 mb-lg-5">
                    At Florette Relocations, we believe our clients’ experiences shine the brightest light on our commitment to provide excellence in local and even international moving services. Here are some stories from the full range of individuals and families who’ve embarked on new chapters of their lives with us:
                </p>  

                <div class="owl-carousel clientTestimonials ">
                    <div class="testi__card bg-white p-4 rounded-5">
                        <div class="d-flex align-items-center gap-4">
                            <img src="assets/images/services/testimonials/liam-family.webp" class="img-fluid rounded-4" width="65" height="65" alt="Liam & Family">
                            <span class="fs-5 text-37 fw-semibold mb-0 d-block">Liam & Family</span>
                        </div>
                        
                        <p class="lead-sm text-37B fw-medium mt-3 mb-2">A Seamless Transition to Tokyo</p>
                        <p class="text-37B mb-0">
                            When my company announced my relocation to Tokyo, I was overwhelmed. Florette Relocations made this life-changing move seem effortless. From the meticulous packing to navigating the customs intricacies, their team was with us every step of the way. Arriving in Tokyo felt like coming home, thanks to their exceptional service
                        </p>  
                    </div> 
                    <div class="testi__card bg-white p-4 rounded-5">
                        <div class="d-flex align-items-center gap-4">
                            <img src="assets/images/services/testimonials/sophie-mark.webp" class="img-fluid rounded-4" width="65" height="65" alt="Sophie & Mark">
                            <span class="fs-5 text-37 fw-semibold mb-0 d-block">Sophie & Mark</span>
                        </div>
                        
                        <p class="lead-sm text-37B fw-medium mt-3 mb-2">Our Dream Move to the French Riviera</p>
                        <p class="text-37B mb-0">
                            Dreaming of our retirement in the French Riviera was one thing; making it happen was another. Florette Relocations turned our dream into reality. Their attention to detail, understanding of our needs, and seamless service were beyond what we hoped for. We started our new life with ease and a touch of French elegance
                        </p>  
                    </div> 
                    <div class="testi__card bg-white p-4 rounded-5">
                        <div class="d-flex align-items-center gap-4">
                            <img src="assets/images/services/testimonials/chen-family.webp" class="img-fluid rounded-4" width="65" height="65" alt="The Chen Family">
                            <span class="fs-5 text-37 fw-semibold mb-0 d-block">The Chen Family</span>
                        </div>
                        
                        <p class="lead-sm text-37B fw-medium mt-3 mb-2">Bringing Our Pets to New York</p>
                        <p class="text-37B mb-0">
                            he thought of moving our two Labrador Retrievers to New York City was daunting. Florette Relocations’ pet moving service was a game-changer. Their compassionate care and expertise in pet relocation made our fur babies’ journey to the Big Apple smooth and stress-free. It was reassurance that we had chosen the best.
                        </p>  
                    </div> 
                    <div class="testi__card bg-white p-4 rounded-5">
                        <div class="d-flex align-items-center gap-4">
                            <img src="assets/images/services/testimonials/liam-family.webp" class="img-fluid rounded-4" width="65" height="65" alt="Liam & Family">
                            <span class="fs-5 text-37 fw-semibold mb-0 d-block">Liam & Family</span>
                        </div>
                        
                        <p class="lead-sm text-37B fw-medium mt-3 mb-2">A Seamless Transition to Tokyo</p>
                        <p class="text-37B mb-0">
                            When my company announced my relocation to Tokyo, I was overwhelmed. Florette Relocations made this life-changing move seem effortless. From the meticulous packing to navigating the customs intricacies, their team was with us every step of the way. Arriving in Tokyo felt like coming home, thanks to their exceptional service
                        </p>  
                    </div> 
                    <div class="testi__card bg-white p-4 rounded-5">
                        <div class="d-flex align-items-center gap-4">
                            <img src="assets/images/services/testimonials/sophie-mark.webp" class="img-fluid rounded-4" width="65" height="65" alt="Sophie & Mark">
                            <span class="fs-5 text-37 fw-semibold mb-0 d-block">Sophie & Mark</span>
                        </div>
                        
                        <p class="lead-sm text-37B fw-medium mt-3 mb-2">Our Dream Move to the French Riviera</p>
                        <p class="text-37B mb-0">
                            Dreaming of our retirement in the French Riviera was one thing; making it happen was another. Florette Relocations turned our dream into reality. Their attention to detail, understanding of our needs, and seamless service were beyond what we hoped for. We started our new life with ease and a touch of French elegance
                        </p>  
                    </div> 
                    <div class="testi__card bg-white p-4 rounded-5">
                        <div class="d-flex align-items-center gap-4">
                            <img src="assets/images/services/testimonials/chen-family.webp" class="img-fluid rounded-4" width="65" height="65" alt="The Chen Family">
                            <span class="fs-5 text-37 fw-semibold mb-0 d-block">The Chen Family</span>
                        </div>
                        
                        <p class="lead-sm text-37B fw-medium mt-3 mb-2">Bringing Our Pets to New York</p>
                        <p class="text-37B mb-0">
                            he thought of moving our two Labrador Retrievers to New York City was daunting. Florette Relocations’ pet moving service was a game-changer. Their compassionate care and expertise in pet relocation made our fur babies’ journey to the Big Apple smooth and stress-free. It was reassurance that we had chosen the best.
                        </p>  
                    </div> 
                </div><!--//.owl-carousel-->
            </div><!--//.container-->
        </section>
        <!-- Client Testimonials And Success End -->

        <!-- FAQ section Start -->
        <section class="py-5 py-md-5 faq__wrap">
            <div class="container">
            <h2 class="fs-1 text-dark fw-normal unic_wrap center text-center text-uppercase">FAQ</h2> 
            <p class="col-lg-10 mx-auto text-dark text-center">
                Embarking on an international move often brings a multitude of questions to mind. From selecting the right relocation services to managing costs, it’s natural to seek clarity as you prepare for this significant transition. Below, we’ve compiled answers to some of the most common queries, incorporating insights and tips to guide and assist you through your international relocation journey.
            </p>
                <div class="faq__wrapper mx-auto"> 
                    <div class="row g-0 g-lg-3">
                        <div class="col-lg-6">
                            <div class="accordion accordion-flush no__icons mt-3 mt-lg-4 mx-auto" id="accordOne">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="floterProc1">
                                        <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#fluSales1" aria-expanded="false" aria-controls="fluSales1">
                                            How Do I Choose the Right International Relocation Service?
                                        </button>
                                    </h3>
                                    <div id="fluSales1" class="accordion-collapse collapse" aria-labelledby="floterProc1" data-bs-parent="#accordOne">
                                        <div class="accordion-body">
                                            <p>We're proud to be among the top-rated, offering seamless international relocation services with a personal touch</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="floterProc2">
                                        <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#fluSales2" aria-expanded="false" aria-controls="fluSales2">
                                            What Are the Best Strategies for Downsizing Before an International Move?
                                        </button>
                                    </h3>
                                    <div id="fluSales2" class="accordion-collapse collapse" aria-labelledby="floterProc2" data-bs-parent="#accordOne">
                                        <div class="accordion-body">
                                            <p>Look for companies with extensive global networks, like ours, ensuring a smooth transfer anywhere in the world.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="floterProc3">
                                        <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#fluSales3" aria-expanded="false" aria-controls="fluSales3">
                                            How Much Does It Cost to Move Overseas?
                                        </button>
                                    </h3>
                                    <div id="fluSales3" class="accordion-collapse collapse" aria-labelledby="floterProc3" data-bs-parent="#accordOne">
                                        <div class="accordion-body">
                                            <p>Check for movers with stellar reviews and a proven track record in Kuala Lumpur, much like our esteemed services.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item ">
                                    <h3 class="accordion-header" id="floterProc4">
                                        <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#fluSales4" aria-expanded="false" aria-controls="fluSales4">
                                            Can I Take My Furniture to Another Country?
                                        </button>
                                    </h3>
                                    <div id="fluSales4" class="accordion-collapse collapse" aria-labelledby="floterProc4" data-bs-parent="#accordOne">
                                        <div class="accordion-body">
                                            <p>We offer a full suite of services, from packing to customs clearance, making us a go-to choice for comprehensive needs.</p> 
                                        </div>
                                    </div>
                                </div>  
                            </div><!--.//accordion--> 
                        </div><!--.//col-->  

                        <div class="col-lg-6">
                            <div class="accordion accordion-flush no__icons mt-3 mt-lg-4 mx-auto" id="accordnFaqtwo">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="flushProone">
                                        <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSaone" aria-expanded="false" aria-controls="flushSaone">
                                            How Do I Ensure My Belongings Are Safe During Transit?
                                        </button>
                                    </h3>
                                    <div id="flushSaone" class="accordion-collapse collapse" aria-labelledby="flushProone" data-bs-parent="#accordnFaqtwo">
                                        <div class="accordion-body">
                                            <p>We recommend getting personalized quotes from us for transparent and detailed budget planning.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="flushProtwo">
                                        <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSatwo" aria-expanded="false" aria-controls="flushSatwo">
                                            What Should I Know About Customs Clearance When Moving Internationally?
                                        </button>
                                    </h3>
                                    <div id="flushSatwo" class="accordion-collapse collapse" aria-labelledby="flushProtwo" data-bs-parent="#accordnFaqtwo">
                                        <div class="accordion-body">
                                            <p>Our expertise in India relocations is unmatched, thanks to our dedicated team and extensive experience.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="flushProthree">
                                        <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSathree" aria-expanded="false" aria-controls="flushSathree">
                                            How Long Does an International Move Typically Take?
                                        </button>
                                    </h3>
                                    <div id="flushSathree" class="accordion-collapse collapse" aria-labelledby="flushProthree" data-bs-parent="#accordnFaqtwo">
                                        <div class="accordion-body">
                                            <p>Yes, we provide secure and flexible storage solutions for your belongings during the transition.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item ">
                                    <h3 class="accordion-header" id="flushProfour">
                                        <button class="accordion-button fw-medium lead-sm collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#flushSafour" aria-expanded="false" aria-controls="flushSafour">
                                            Is it Possible to Relocate My Pet Internationally?
                                        </button>
                                    </h3>
                                    <div id="flushSafour" class="accordion-collapse collapse" aria-labelledby="flushProfour" data-bs-parent="#accordnFaqtwo">
                                        <div class="accordion-body">
                                            <p>Absolutely, our team ensures smooth customs clearance, guiding you through every paperwork detail.</p> 
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

        
        

                 
    </main>


    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
   
</body>
</html>
