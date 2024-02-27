    
    <!-- PRELOADER --> 
    <div id="preloader" class="position-fixed top-0 start-0 w-100 h-100 bg-white">  
        <div class="w-100 w-100 h-100 position-absolute top-0 start-0 d-flex justify-content-center align-items-center"> 
            <div class="loader"></div>      
        </div>
    </div>
 
    <!-- navigation start -->
    
    <nav class="navbar navbar-expand-xl smart-scroll border-0 justify-content-between">
        <div class="container"> 
             <a href="<?php echo $base_url;?>" class="navbar-brand p-0 me-0" aria-label="<?php echo $site_name;?>" title="<?php echo $site_name;?>">
                <img class="img-fluid w-auto" width="151" height="80" src="<?php echo $base_url;?>assets/images/florette-logo.svg" alt="<?php echo $site_name;?>">
             </a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">   
                    <li class="nav-item ms-2 ms-lg-3 ms-xxl-4 dropdown"> 
                        <a class="nav-link py-3" href="#">
                           Home
                        </a>  
                    </li>
                    <li class="nav-item ms-2 ms-lg-3 ms-xxl-4 dropdown"> 
                        <a class="nav-link py-3" href="#">
                            About Us 
                        </a>  
                    </li>
                    <li class="nav-item dropdown ms-3 ms-lg-3 ms-xxl-4">    
                        <a class="nav-link py-3" href="#">
                            Services
                        </a>  
                    </li>   
                    <li class="nav-item ms-2 ms-lg-3 ms-xxl-4"> 
                        <a class="nav-link py-3" href="programs.php">
                            Gallery
                        </a>  
                    </li>
                    <li class="nav-item ms-2 ms-lg-3 ms-xxl-4 dropdown"> 
                        <a class="nav-link py-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blog/News
                        </a>  
                    </li> 
                    <li class="nav-item ms-2 ms-lg-3 ms-xxl-4">
                        <a class="nav-link py-3" href="#">Contact Us</a>
                    </li>
                </ul> 
            </div>   
            <div class=""> 
                <a href="#" class="ms-3 fw-semibold d-none d-sm-inline-flex" aria-label="Get Started" style="color: #D7121B;">
                    <img src="assets/images/icons/call.svg" class="img-fluid me-2" width="18" height="18" alt="phone">
                    +6 012 748 2799
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
                        <li><a class="dropdown-item" href="#">Coaching</a></li> 
                        <li><a class="dropdown-item" href="youth-traning.php">Youth Training and Mentoring</a></li> 
                        <li><a class="dropdown-item" href="#">Corporate Training</a></li> 
                        <li><a class="dropdown-item" href="#">Soft Skill Training for Corporates and Universities</a></li> 
                        <li><a class="dropdown-item" href="#">Women Empowerment Coaching</a></li> 
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
 