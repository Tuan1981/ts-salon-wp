<?php
/**
 *  The template for displaying pages
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no pages matched your criteria.', 'tranquil-wp' ); ?></p>
            <?php endif; ?>

        </div><!-- /.blog-main -->

<!-- ========== SIDEBAR ========== -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

            <?php get_sidebar(); ?> 

        </div><!-- /.blog-sidebar -->
    </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>