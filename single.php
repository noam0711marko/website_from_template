Skip to main contentSkip to toolbar
About WordPress
Noam Marco
00 Comments in moderation
New
Managed WordPress
Howdy, noammarco
Log Out
Help
Edit Themes
Velo Portfolio: Single Post (single.php)
Select theme to edit: 
Velo Portfolio
 

Theme Files
Stylesheet
(style.css)
Theme Functions
(functions.php)
jsfolder
404 Template
(404.php)
Articles Page Template
(articles.php)
class-tgm-plugin-activation.php
Theme Footer
(footer.php)
Homepage
(front-page.php)
Theme Header
(header.php)
incfolder
Main Index Template
(index.php)
Single Page
(page.php)
single-post.php
Single Post
(single.php)
template-partsfolder
Selected file content:
1
<?php
2
    get_header();
3
?>
4
​
5
    <div class="col-lg-12 post-header" style="background-image: url(<?php the_field('preview_img'); ?>);">
6
        <div id="color-overlay"></div>
7
        <p class="post-title"><?php the_field('title'); ?></p>
8
        <p class="post-info"><?php the_field('category'); ?></p>
9
    </div>
10
​
11
    <div class="container-fluid mt-5 mb-5" id="project-container">
12
        <div class="row">
13
            <div class="col-lg-6">
14
                <?php the_content(); ?>
15
            </div>
16
​
17
            <div class="col-lg-6 p-5">
18
                <p class="post-info lh-lg"><?php the_field('description'); ?></p>
19
                
20
                <?php 
21
                    $link = get_field('demo_link');
22
                    if( $link ): 
23
                        $link_url = $link['url'];
24
                        $link_title = $link['title'];
25
                        $link_target = $link['target'] ? $link['target'] : '_self';
26
                        ?>
27
                    <button type="button" class="btn btn-light button-white mt-5 mr-5" onclick="window.location.href='<?php echo esc_url( $link_url ); ?>'"><?php echo esc_html( $link_title ); ?></button>
28
                <?php endif; ?>
29
​
30
                <?php 
31
                    $link = get_field('buy_link');
32
                    if( $link ): 
33
                        $link_url = $link['url'];
34
                        $link_title = $link['title'];
35
                        $link_target = $link['target'] ? $link['target'] : '_self';
36
                        ?>
37
                    <button type="button" class="btn btn-text btn-link mt-5 ml-5 mr-5" onclick="window.location.href='<?php echo esc_url( $link_url ); ?>'"><i class="fas fa-shopping-bag"></i> <?php echo esc_html( $link_title ); ?></button>         
38
                <?php endif; ?>
39
​
40
                <?php 
41
                    $link = get_field('documentation_link');
42
                    if( $link ): 
43
                        $link_url = $link['url'];
44
                        $link_title = $link['title'];
Documentation: 
Function Name…
 
 


Thank you for creating with WordPress.Version 5.8.3
