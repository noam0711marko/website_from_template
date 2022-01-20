<?php
  get_header();
?>

    <!-- Home -->
    <div class="container-full" id="home">
      <div class="row">
        <div class="col-lg-6 home-left">
          <div class="left-content">
          <?php if( get_theme_mod( 'hello_text') ): ?>
            <p class="hello"><?php echo get_theme_mod('hello_text', 'Hello!, My name is'); ?></p>
          <?php endif; ?>
            <p class="main-name"><?php echo get_theme_mod('myname_text', 'John Doe'); ?></p>
              <p class="occupation"><span class="typewrite" data-period="1500"
                 data-type='[ <?php echo get_theme_mod('occupation_text', '"Front End Developer", "Web Designer", "Freelancer"'); ?> ]'>
                <span class="wrap"></span>
              </span>
              </p>
            <button type="button" class="btn btn-light button-white mr-5" onclick="window.location.href='<?php echo get_theme_mod('btn1_link', '#Download CV'); ?>'"><?php echo get_theme_mod('btn1_title', 'Download CV'); ?></button>
            <button type="button" class="btn btn-link button-text" onclick="window.location.href='<?php echo get_theme_mod('btn2_link', '#contact'); ?>'">Contact Me</button>

            <div class="social-links">
              <?php if( get_theme_mod( 'twitter_link') ): ?>
                <a href="<?php echo get_theme_mod('twitter_link', ' '); ?>"><i class="fab fa-twitter"></i></a>
              <?php endif; ?>

              <?php if( get_theme_mod( 'linkedin_link') ): ?>
                <a href="<?php echo get_theme_mod('linkedin_link', ' '); ?>"><i class="fab fa-linkedin-in"></i></a>
              <?php endif; ?>
    
              <?php if( get_theme_mod( 'github_link') ): ?> 
                <a href="<?php echo get_theme_mod('github_link', ' '); ?>"><i class="fab fa-github"></i></a>
              <?php endif; ?>
            </div>

          </div>
        </div>

        <div class="col-lg-6 home-right" style="background-image: url(<?php echo get_theme_mod('home_profileimg', get_bloginfo('template-url') . ' '); ?>);">

        </div>

      </div>
    </div>
    <!-- End Home -->

    <!-- About -->
    <div class="container-full mb-5" id="about">
        <div class="row">
            <div class="col-lg-5"> <!-- About Avatar image container -->
                <img src="<?php echo get_theme_mod('about_profileimg'); ?>" class="about-img" alt="about img">
            </div> <!-- End About Avatar image container -->

            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6 about-left"> <!-- About left -->
                    <p class="sections-title mt-4 mb-3">About me</p>
                        <p class="description" id="my-description"><?php echo get_theme_mod('about_description', 'Lorem ipsum dolor sit amet...'); ?></p>
                    </div> <!-- End About left -->

                    <?php if( get_theme_mod( 'display_collab', '1') == '1') { ?>  
                    <div class="col-lg-6 about-right"> <!-- About Right -->
                        <p class="hire-title">Let's collaborate!</p>
                        <p class="description" id="collab-description"><?php echo get_theme_mod('collab_description', 'Lorem ipsum dolor sit amet...'); ?></p>
                        <a href="#contact" class="hire">Hire me <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div> <!-- End About left -->
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
    <!-- End About -->

    <!-- Services -->
    <div class="container mt-5 mb-5" id="services">
        <div class="col-lg-12 clearfix">
            <div class="pt-5 pb-5">
                <p class="sections-title mt-5 mb-1" id="services-title"><?php echo get_theme_mod('services_title', 'Services'); ?></p>
                <p><?php echo get_theme_mod('services_description', 'Here it is my services that can i do, my skills and my experience.'); ?></p>
                <a href="#contact" class="hire">Hire me <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>

            <div class="container-full">
                <div class="row justify-content-center mr-1 ml-1">
                    <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'Services',
                        'posts_per_page' => 10
                        )
                    );
                    ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-lg-5 services-card m-3"> <!-- CARD -->
                        <div class="row">
                        <div class="col-lg-6">
                            <p class="card-title"><?php the_field('title'); ?></p>
                        </div>
                        </div>
                        <p class="card-subtitle"><?php the_field('experience'); ?></p>
                        <p class="card-description"><?php the_field('description'); ?></p>
                        <p class="skills"><?php the_field('skills'); ?></p>
                    </div> <!-- END CARD -->
                    <?php endwhile; wp_reset_query(); ?>

                </div>
            </div>
    </div>   <!-- End Services -->
 
    <!-- Contact -->
    <div class="container mt-3 mb-5" id="contact">
      <p class="sections-title">Contact</p>
      <p class="contact-description">Say Hi! or contact me on social media</p>

       <div class="col-lg-8 centered">
        <!-- Contact Form 7 -->
        <?php echo do_shortcode( '[contact-form-7 id="15" title="Contact form"]' ); ?>
      </div>

        <h1><p class="sections mt-5">Find me on</p></h1>
        <p class="findme-links">
            <?php if( get_theme_mod( 'twitter_link') ): ?>
            <a href="<?php echo get_theme_mod('twitter_link', ' '); ?>">Twitter</a>
            <?php endif; ?>

            <?php if( get_theme_mod( 'linkedin_link') ): ?>
            <a href="<?php echo get_theme_mod('linkedin_link', ' '); ?>">LinkedIn</a>
            <?php endif; ?>

            <?php if( get_theme_mod( 'github_link') ): ?> 
            <a href="<?php echo get_theme_mod('github_link', ' '); ?>">GitHub</a>
            <?php endif; ?>  
        </p>

    </div>
    <!-- End Contact -->

<?php
  get_footer();
?>