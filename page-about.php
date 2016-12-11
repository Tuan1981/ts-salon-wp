<?php
/**
 *  Template Name: About Us 
 */

get_header(); ?>

<!-- ========== ABOUT US ========== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2><?php the_title(); ?></h2>
                <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/divider-purple.png" alt="divider">
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet lacus dictum, blandit risus at, mollis odio. Curabitur non eros nulla. In lectus libero, euismod ac mauris et, interdum efficitur lorem. Praesent at erat sodales, tincidunt turpis sed, elementum odio. Ut tempor fermentum condimentum. Aenean efficitur ipsum lorem, eget tincidunt felis pellentesque ac. Vestibulum vel interdum odio, vitae scelerisque nibh. Nam ac sollicitudin elit, a sollicitudin massa. Donec quis porta nisi.</p>

            <p>  Nulla lacinia fringilla sem id bibendum. Etiam at arcu sapien. Nunc ornare tellus erat, sit amet fermentum magna molestie quis. Donec id erat sem. Morbi finibus orci erat, vitae mattis diam elementum vel. Morbi commodo, lorem in blandit congue, felis elit sollicitudin sapien, vestibulum posuere ipsum neque nec ante. Ut porta lectus sed nibh lacinia, sit amet tincidunt purus ornare. Suspendisse vel sapien facilisis, pharetra eros et, commodo tortor. Phasellus vehicula magna ut arcu ornare sagittis. Nulla facilisi.
            </p> 
        </div><!-- /.row -->
        <?php get_template_part('content-facilities'); ?>
    </div><!-- /.container -->
</section><!-- /.section -->


<?php get_footer(); ?>