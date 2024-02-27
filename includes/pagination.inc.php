<nav aria-label="Navigation">
    <ul class="pagination mt-4 mt-md-5 justify-content-center">
        <?php if( $prevBtn === 'true' ) { ?> 
            <li class="page-item">
                <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0" href="<?php echo $prevPageUrl; ?>" aria-label="Previous">
                    <img src="<?php echo $base_url;?>assets/images/icons/chevron-left.svg" class="img-fluid" alt="Icon">
                </a>
            </li>
        <?php } ?> 
        <li class="page-item">
            <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0 <?php if($active==='1'){echo "active"; }else{ echo ''; }?>" href="gallery.php">1</a>
        </li>
        <li class="page-item">
            <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0 <?php if($active==='2'){echo "active"; }else{ echo ''; }?>" href="gallery-2.php">2</a> 
        </li>   
        <li class="page-item">
            <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0 <?php if($active==='3'){echo "active"; }else{ echo ''; }?>" href="gallery-3.php">3</a> 
        </li>   
        <!-- <li class="page-item">
            <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0 <?php if($active==='4'){echo "active"; }else{ echo ''; }?>" href="#">4</a> 
        </li>    -->
        <?php if( $nextBtn === 'true' ) { ?> 
            <li class="page-item">
                <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0" href="<?php echo $nextPageUrl; ?>" aria-label="Next">
                    <img src="<?php echo $base_url;?>assets/images/icons/chevron-right.svg" width="24" height="24" class="img-fluid" alt="Icon">
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>