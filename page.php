<?php
    get_header();
?>

    <div class="col-lg-12 post-header" style="background-image: url(<?php the_field('preview_img'); ?>);">
        <div id="color-overlay"></div>
        <p class="post-title"><?php echo get_the_title(); ?></p>
    </div>

     <div class="container mt-5 mb-5">
         <?php 
            the_content();
         ?>
     </div>

<?php
    get_footer();
?>