 
    <!-- navigation start -->
    
    <nav class="navbar navbar-expand-xl smart-scroll border-0 justify-content-between">
        <div class="container"> 
             <a href="<?php echo $base_url;?>" class="navbar-brand p-0 me-0" aria-label="<?php echo $site_name;?>" title="<?php echo $site_name;?>">
                <img class="img-fluid w-auto" width="151" height="80" src="<?php echo $base_url;?>assets/images/florette-logo.svg" alt="<?php echo $site_name;?>">
             </a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">   
                    <li class="nav-item ms-2 ms-lg-3 ms-xxl-4"> 
                        <a class="nav-link py-2" href="<?php echo $base_url;?>">
                           Home
                        </a>  
                    </li> 
                    <li class="nav-item ms-3 ms-lg-3 ms-xxl-4 dropdown">    
                        <a class="nav-link py-2 dropdown-toggle" href="#" type="button" id="aboutDrop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us 
                        </a>  
                        <div class="dropdown-menu p-2 bg-white rounded-3" aria-labelledby="aboutDrop" style="min-width:10rem"> 
                            <ul class="d-flex flex-column gap-1">         
                                <li>
                                    <a href="<?php echo $base_url;?>who-we-are.php" class="dropdown-item rounded-1">Who We Are</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url;?>our-team.php" class="dropdown-item rounded-1">Our Team</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url;?>clients.php" class="dropdown-item rounded-1">Clients</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url;?>testimonials.php" class="dropdown-item rounded-1">Testimonials</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url;?>career.php" class="dropdown-item rounded-1">Career</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url;?>enquiry.php" class="dropdown-item rounded-1">Enquiry</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url;?>faqs.php" class="dropdown-item rounded-1">FAQs</a>
                                </li> 
                            </ul>
                        </div>  
                    </li>   
                    <li class="nav-item ms-3 ms-lg-3 ms-xxl-4 dropdown">    
                        <a class="nav-link py-2 dropdown-toggle" href="#" type="button" id="serviceDrop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>  
                        <div class="dropdown-menu p-2 bg-white rounded-3" aria-labelledby="serviceDrop"> 
                            <ul class="d-flex flex-column gap-1">         
                                <li>
                                    <a href="#" class="dropdown-item rounded-1">International Relocation</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item rounded-1">Corporate Relocation</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item rounded-1">Domestic Move</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item rounded-1">Office Relocation</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item rounded-1">Storage And Warehousing</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item rounded-1">Pet Relocation</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item rounded-1">Specialized Container Shipping Solutions for Global Trade</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item rounded-1">Comprehensive Insurance</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item rounded-1">Inbound Services</a>
                                </li>
                            </ul>
                        </div>  
                    </li>   
                    <li class="nav-item ms-2 ms-lg-3 ms-xxl-4"> 
                        <a class="nav-link py-2" href="programs.php">
                            Gallery
                        </a>  
                    </li>
                    <li class="nav-item ms-2 ms-lg-3 ms-xxl-4"> 
                        <a class="nav-link py-2" href="#">
                            Blog/News
                        </a>  
                    </li> 
                    <li class="nav-item ms-2 ms-lg-3 ms-xxl-4">
                        <a class="nav-link py-2" href="<?php echo $base_url;?>contact.php">Contact Us</a>
                    </li>
                </ul> 
            </div>   
            <div class=""> 
                <a href="tel:+60127482799" class="ms-3 fw-semibold d-none fs-4 d-sm-inline-flex align-items-center gap-2 text-white py-1" aria-label="+6 012 748 2799" title="+6 012 748 2799">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path fill="#fff" d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/></svg>
                    <span>+6 012 748 2799</span>
                </a> 
               
    
                <button class="btn d-xl-none" onclick="openSideMenu()" type="button" aria-label="Menu Open Btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2.25em" viewBox="0 0 448 512"><path fill="#fff" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                </button>
            </div>
        </div>
    </nav>
    <!-- navigation end --> 
        
    <!-- Side Navigation Start -->
    <aside class="sideNav position-fixed top-0 start-0 w-100 h-100" id="sideNav">
        <div class="content bg-white" id="mainLinkBox">
            <div class="pe-2"> 
                <button onclick="closeSideMenu()" class="btn btn-close rounded-0 opacity-1 p-1 bg-danger" type="button" aria-label="Menu Close Btn"></button>
            </div>
            <ul class="links__list">
                <li><a href="<?php echo $base_url;?>">Home</a></li>
                <li><a href="<?php echo $base_url;?>about.php">About Us</a></li> 
                <li>
                    <a class="collapse__btn collapsed" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                        Services
                    </a> 
                 
                    <ul class="collapse" id="collapse1"> 
                        <li>
                            <a href="#" class="dropdown-item rounded-1">International Relocation</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item rounded-1">Corporate Relocation</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item rounded-1">Domestic Move</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item rounded-1">Office Relocation</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item rounded-1">Storage And Warehousing</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item rounded-1">Pet Relocation</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item rounded-1">Specialized Container Shipping Solutions for Global Trade</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item rounded-1">Comprehensive Insurance</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item rounded-1">Inbound Services</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo $base_url;?>programs.php">
                       Programms
                    </a> 
                </li> 
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- Side Navigation End -->
  
    <script> 
        function openSideMenu() { 
            document.getElementById("sideNav").classList.add('js--open'); 
        } 
        function closeSideMenu() {
            document.getElementById("sideNav").classList.remove('js--open');  
        } 
        const canceledElement = document.getElementById("mainLinkBox");
        document.addEventListener('mousedown', (event) => {
            if(!canceledElement.contains(event.target)) {
                document.getElementById("sideNav").classList.remove('js--open');  
                
            }
        })
    </script> 
 