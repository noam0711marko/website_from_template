<?php
    get_header();
?>

    <div class="col-lg-12 post-header">
        <div id="color-overlay"></div>
        <p class="post-title"><?php echo get_the_title(); ?></p>
        <p><?php echo get_the_time('F j, Y'); ?></p>
    </div>

     <div class="container mt-5 mb-5 p-5">
         <?php 
            the_content();
         ?>
     </div>

<?php
    get_footer();
?>