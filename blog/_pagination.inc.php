 

    <nav aria-label="Blog Page Navigation">
        <ul class="pagination mt-4 mt-md-5 justify-content-center" id="blogPagination">
            <?php if( $firstArrow === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0" href="<?php echo $prevPageUrl; ?>" aria-label="Previous">
                        <img src="<?php echo $base_url;?>assets/images/icons/chevron-left.svg" class="img-fluid" alt="Icon">
                    </a>
                </li>
            <?php } ?> 
            <li class="page-item">
                <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0 <?php if($active==='1'){echo "active"; }else{ echo ''; }?>" href="index.php">1</a>
            </li>
            <li class="page-item">
                <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0 <?php if($active==='2'){echo "active"; }else{ echo ''; }?>" href="#">2</a> 
            </li>  
            <li class="page-item">
                <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0 <?php if($active==='3'){echo "active"; }else{ echo ''; }?>" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0 <?php if($active==='4'){echo "active"; }else{ echo ''; }?>" href="#">4</a>
            </li> 
            <?php if( $lastArrow === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link d-flex justify-content-center align-items-center lh-1 p-0 rounded-0" href="<?php echo $nextPageUrl; ?>" aria-label="Next">
                        <img src="<?php echo $base_url;?>assets/images/icons/chevron-right.svg" class="img-fluid" alt="Icon">
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>