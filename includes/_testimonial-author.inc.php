<div class="border-top d-flex align-items-center pt-3 mt-4">
    <div class="d-flex align-items-center authore__box" style="width:calc(100% - 8rem);"> 
        <img 
            src="<?php echo $image; ?>" 
            width="60" height="60" 
            alt="<?php echo $name; ?>"
            class="rounded-circle img-fluid object-cover"
            style="width: 3rem;height: 3rem;"
        >
        <div class="ps-3" style="width: calc(100% - 3rem);">
            <p class="mb-0 fw-semibold lead-sm" style="color: #2C2C2C;line-height: 1.2;"><?php echo $name; ?></p>
            <p class="mb-0 small" style="color: #9A9A9A;">Student</p>
        </div>
    </div>
    <div class="google__box d-inline-flex align-items-center" style="width:8rem;">
        <img 
            src="assets/images/icons/google.webp" 
            width="48" height="48" 
            alt="Google"
            class="rounded-circle img-fluid object-cover"
            style="width: 2.625rem;height: 2.625rem;"
        >
        <div class="lead-sm fw-normal ps-2 lh-1"> 
            Google Review
        </div>
    </div>
</div>