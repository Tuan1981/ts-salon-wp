<?php get_header(); ?>

    <!-- ========== WELCOME ========== -->
    <section id="welcome">
    <div class="container">
    <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <h2><?php _e( 'Welcome to Tranquil Spa', 'tranquilwp' ); ?></h2>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/divider-purple.png" alt="divider">
    </div><!-- /.col -->
    </div><!-- /.row -->

        <?php get_template_part('content-facilities'); ?>
        
        </div><!-- /.container -->
        </section><!-- /.section -->

        <!-- ========== LATEST OFFERS ========== -->
        <section id="latest-offers">
        <div class="container">
        <!-- margin bottom class to add space below divider -->
        <div class="row margin-bottom">
        <div class="col-sm-6 col-sm-offset-3">
            <h2><?php _e( 'Laters Offers', 'tranquilwp' ); ?></h2>
            <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/divider-silver.png" alt="divider">
        </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
        <div class="col-sm-12">
        <div class="row">
        <div class="col-sm-4">
        <div class="offer">
            <span>$<?php the_field('offer_price'); ?></span>
            <h3><?php the_field('offer_name'); ?></h3>
            <p><?php the_field('offer_1_line_1'); ?></p><hr>
            <p><?php the_field('offer_1_line_2'); ?></p><hr>
        </div>
        </div>
        <div class="col-sm-4">
            <div class="offer">
                <span>$<?php the_field('offer_price_2'); ?></span>
                <h3><?php the_field('offer_name_2'); ?></h3>
                <p><?php the_field('offer_2_line_1'); ?></p><hr>
                <p><?php the_field('offer_2_line_2'); ?></p><hr>
            </div>
            </div>
            <div class="col-sm-4">
                <div class="offer">
                    <span>$<?php the_field('offer_price_3'); ?></span>
                    <h3><?php the_field('offer_name_3'); ?></h3>
                    <p><?php the_field('offer_3_line_1'); ?></p><hr>
                    <p><?php the_field('offer_3_line_2'); ?></p><hr>
                </div>
            </div>
            </div><!-- /. nested row -->
            </div><!-- /.col wrapper -->
            </div><!-- /.row -->
            </div><!-- /.container -->
            </section><!-- /.section -->

            <!-- ========== SHOP ONLINE SECTION ========== -->
            <section id="shop-online">
            <div class="container">
            <div class="row">
            <!-- text-center is a Bootstrap class -->
            <div class="col-sm-6 col-sm-offset-3 text-center">
                <h2><?php _e( 'Shop Online', 'tranquilwp' ); ?></h2>
                <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/divider-purple.png" alt="divider"><br>
                <a href="#" class="btn btn-default" role="button">
                    <?php _e( 'Shop Here', 'tranquilwp' ); ?></a>
            </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container -->
            </section>

<?php get_footer(); ?>
