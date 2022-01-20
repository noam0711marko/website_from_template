<!-- Latest Blog Articles -->
<div class="container mt-5" id="blog">
        <p class="sections-title"><h1>Latest Articles</h1></p>
        <button type="button" class="btn btn-light button-white mt-3 mb-3" onclick="window.location.href='blog'">See All</button>

            <div class="row justify-content-center">
                <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
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
<!-- End Latest Blog Articles -->
