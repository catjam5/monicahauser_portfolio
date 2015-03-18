<?php
/**
* The template for displaying the Portfolio Page
*
* @package WordPress
* @subpackage Skillcrushstarter
* @since Skillcrushstarter 1.1
*/
get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class='portfolio_page'>
                <?php the_content(); ?>

                    <?php
                    $website1 = get_field('website1');
                    $image1 = get_field('image1');
                    $blurb1 = get_field('blurb1');
                    $website2 = get_field('website2');
                    $image2 = get_field('image2');
                    $blurb2 = get_field('blurb2');
                    $website3 = get_field('website3');
                    $image3 = get_field('image3');
                    $blurb3 = get_field('blurb3');
                    $website4 = get_field('website4');
                    $image4 = get_field('image4');
                    $blurb4 = get_field('blurb4');
                    $contact_message = get_field('contact_message');
                    $size = "full";
                    ?>
                </div><!-- #?? -->
            </div><!-- #?? -->
                    <?php endwhile; // end of the loop. ?>	
                    
            <div id="website1">
                <p><span class="website-name"><?php echo $website1; ?></p></span> 
                    
            </div>

            <div id="blurb-website1">    
                <div class="content-text">
                    <p><?php echo $blurb1; ?></p>
                </div>
                    
            <?php 
            if ($image1 == true) {
                echo '<div class="image1">' . wp_get_attachment_image( $image1, $size ) . '</div>';
    }
                    ?>
            </div>
    
            <div id="website2">
                <p><span class="website-name"><?php echo $website2; ?></p></span> 
                    
            </div>

            <div id="blurb-website2">    
                <div class="content-text">
                    <p><?php echo $blurb2; ?></p>
                </div>
                    
            <?php 
            if ($image2 == true) {
                echo '<div class="image2">' . wp_get_attachment_image( $image2, $size ) . '</div>';
    }
                    ?>
            </div>
            
                <div id="website3">
                <p><span class="website-name"><?php echo $website3; ?></p></span> 
                    
            </div>

            <div id="blurb-website3">    
                <div class="content-text">
                    <p><?php echo $blurb3; ?></p>
                </div>
                    
            <?php 
            if ($image3 == true) {
                echo '<div class="image3">' . wp_get_attachment_image( $image3, $size ) . '</div>';
    }
                    ?>
            </div>    
        
                    <div id="website4">
                <p><span class="website-name"><?php echo $website4; ?></p></span> 
                    
            </div>

            <div id="blurb-website4">    
                <div class="content-text">
                    <p><?php echo $blurb4; ?></p>
                </div>
                    
            <?php 
            if ($image4 == true) {
                echo '<div class="image4">' . wp_get_attachment_image( $image4, $size ) . '</div>';
    }
                    ?>
            </div>      
        
            </article>
           
        <div id="about-footer">
                <div class="contact-message">
                    <strong><?php echo $contact_message; ?></strong>
                <a class="button" href="<?php echo home_url(); 
?>/contact">Contact Us</a>
                    </div>
            </div>
        </div><!-- #content -->
    </div><!-- #primary -->
<?php get_footer(); ?>