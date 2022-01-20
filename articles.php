<?php
/* Template Name: Articles */
get_header();
?>

    <div class="col-lg-12 post-header">
        <div id="color-overlay"></div>
        <p class="post-title"><?php echo get_the_title(); ?></p>
    </div>

     <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <?php $the_query = new WP_Query( 'posts_per_page=10' ); ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

            <div class="col-lg-4 mt-5 blog-article">
                <div class="img-container">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                        } else { ?>
                        <img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
                    <?php } ?>
                    <a href="<?php the_permalink() ?>"> 
                        <div class="overlay">  
                            <p class="img-hover-title"> <?php the_title(); ?> </p>
                            <p class="img-hover-subtitle"> <?php $char_limit = 130; $content = $post->post_content; echo substr(strip_tags($content), 0, $char_limit); ?> [...] </p>   
                        </div>
                    </a>
                 </div>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>

        </div>
     </div>

<?php
    get_footer();
?>