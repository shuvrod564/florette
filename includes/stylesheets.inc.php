

<?php if($folder === 'root') {  ?> 
    <!-- CSS: All Vendors -->
    <link rel="stylesheet" href="<?php echo $base_url;?>css/vendors.css">  
    <link rel="stylesheet" href="<?php echo $base_url;?>css/variables.css">  
    <!-- CSS: Html Designer -->
    <link rel="stylesheet" href="<?php echo $base_url;?>css/style.css">  
<?php } if($folder === 'blog') {  ?>
    <!-- CSS: All Vendors -->
    <link rel="stylesheet" href="<?php echo $base_url;?>css/vendors.css">  
    <link rel="stylesheet" href="<?php echo $base_url;?>css/variables.css"> 
    <!-- CSS: Html Designer -->
    <link rel="stylesheet" href="<?php echo $base_url;?>css/blog.css">  
<?php } ?>

    <style>
        :root {
            --arrow-right: url('<?php echo $base_url;?>assets/images/icons/right-arrow.svg');
            --eye: url('<?php echo $base_url;?>assets/images/gallery/eye-white.svg');
        }
    </style>