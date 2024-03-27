


<section class="testimonial__wrapper <?php if (isset($bg) && $bg == 'white') { echo "not__white__theme"; } ?> d-flex align-items-start position-relative pt-5 pb-4 py-lg-5">  
    <?php if (isset($bg) && $bg = 'white') { ?>
        
    <?php } else { ?>
        <img 
            src="assets/images/home/our-success-bg.webp" 
            srcset="
                assets/images/home/our-success-bg-800.webp 500w,
                assets/images/home/our-success-bg-400.webp 1000w,
                assets/images/home/our-success-bg.webp 1200w 
            "
            alt="<?php echo $site_name;?>"
            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0" 
        />
        <div class="position-absolute top-0 start-0 w-100 h-100 z-1" style="background-color: rgba(19, 49, 76, 0.96);"></div> 
    <?php } ?>

        <div class="container mt-lg-3 z-index">
            <h2 class="fs-1 fw-normal unic_wrap center text-white text-center text-uppercase">
                Our Success Starts With Them
            </h2>  
            <p class="text-center text-white lead fw-normal ">Our Clients Portray Who We Are, At Our Best.</p>
            
            <div id="carouselTestimonial" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators d-none">
                    <li
                        data-bs-target="#carouselTestimonial"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="01 slide"
                    ></li>
                    <li
                        data-bs-target="#carouselTestimonial"
                        data-bs-slide-to="1"
                        aria-label="02 slide"
                    ></li>
                    <li
                        data-bs-target="#carouselTestimonial"
                        data-bs-slide-to="2"
                        aria-label="03 slide"
                    ></li>
                    <li
                        data-bs-target="#carouselTestimonial"
                        data-bs-slide-to="3"
                        aria-label="04 slide"
                    ></li>
                    <li
                        data-bs-target="#carouselTestimonial"
                        data-bs-slide-to="4"
                        aria-label="05 slide"
                    ></li>
                    <li
                        data-bs-target="#carouselTestimonial"
                        data-bs-slide-to="5"
                        aria-label="06 slide"
                    ></li>
                    <li
                        data-bs-target="#carouselTestimonial"
                        data-bs-slide-to="6"
                        aria-label="07 slide"
                    ></li>
                    <li
                        data-bs-target="#carouselTestimonial"
                        data-bs-slide-to="7"
                        aria-label="08 slide"
                    ></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <?php
                            $thumbnail="kj.webp";
                            $name="K J";
                            $desc="Excellent service at most competetive rates. Quite flexible in service with personal attention. Appreciate continuous support and updates provided throughout the shipment. Many Thanks to Florrette especially Anoop himself and his wonderful Team. Thank you.";
                            include("testimonial-item.inc.php");
                        ?> 
                    </div><!--.//carousel-item-->
                    <div class="carousel-item">
                        <?php
                            $thumbnail="dj.webp";
                            $name="Divya Jitesh";
                            $desc="Thank you for the excellent service. I have received all my items safely in our new home.";
                            include("testimonial-item.inc.php");
                        ?>  
                    </div><!--.//carousel-item-->
                    <div class="carousel-item">
                        <?php
                            $thumbnail="Nilesh-Patel.webp";
                            $name="Nilesh Patel";
                            $desc="Florette Relocation has peovided a professional,  reliable and quality services for personal shipment from Malaysia to Qatar. Time taken for shipment delivery was quite reasonable.";
                            include("testimonial-item.inc.php");
                        ?>  
                    </div><!--.//carousel-item-->
                    <div class="carousel-item">
                        <?php
                            $thumbnail="Arun-Kurian.webp";
                            $name="Arun Kurian";
                            $desc="Florette Relocation helped us to move our stuffs from Penang to Austria. The team was very much dedicated and professional. The estimate expense and the tentative time was already communicated and the things were delivered on time. Thanks to Anoop for guiding us through the process. Surely recommended.";
                            include("testimonial-item.inc.php");
                        ?>  
                    </div><!--.//carousel-item-->
                    <div class="carousel-item">
                        <?php
                            $thumbnail="Rangam-Bir.webp";
                            $name="Rangam Bir";
                            $desc="I used Florette for a domestic move within Kuala Lumpur recently. The team was highly professional in handling, packing and completing the move efficiently. I highly recommend giving them a try for your next move.";
                            include("testimonial-item.inc.php");
                        ?>  
                    </div><!--.//carousel-item-->
                    <div class="carousel-item">
                        <?php
                            $thumbnail="Sandeep-Ghalay.webp";
                            $name="Sandeep Ghalay";
                            $desc="Florette Relocations provided an efficient, professional and friendly service in all the phases of the moving procedure. I recently moved my consignment from Malaysia to Bangalore and found them to be very dedicated and prompt. I am impressed with the quality of service and will definitely recommend to others.";
                            include("testimonial-item.inc.php");
                        ?>  
                    </div><!--.//carousel-item-->
                    <div class="carousel-item">
                        <?php
                            $thumbnail="mei-choon.webp";
                            $name="mei choon";
                            $desc="Very good service. Always responsive and gives extra help. Staff were very professional. They packed and numbered my boxes.";
                            include("testimonial-item.inc.php");
                        ?>  
                    </div><!--.//carousel-item-->
                    <div class="carousel-item">
                        <?php
                            $thumbnail="Santhosh-Nair.webp";
                            $name="Santhosh Nair";
                            $desc="Reliable and highly recommended service...";
                            include("testimonial-item.inc.php");
                        ?>  
                    </div><!--.//carousel-item-->
                     
                    
                </div><!--.//carousel-inner-->
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselTestimonial"
                    data-bs-slide="prev"
                >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselTestimonial"
                    data-bs-slide="next"
                >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
        </div><!--.//container-->
    </section>