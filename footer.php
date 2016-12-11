<!-- ========== FOOTER ========== -->
<footer>
    <div class="container">
        <div class="row">
            <!-- text-center = Bootstrap class, margin-bottom = my custom class -->
            <div class="col-sm-6 col-sm-offset-3 text-center margin-bottom">
                <h2><?php _e( 'Keep in touch', 'tranquilwp' ); ?></h2>
                <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/divider-silver.png" alt="divider">
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-4">
                <address>
                    Theme Star Spa<br>
                    Address line 1<br>
                    Address line 2<br>
                    Address line 3<br>
                </address>
            </div><!-- /.col -->
            <div class="col-sm-4">
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'footer',
                        'container'         => 'ul',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                               );
                ?>
            </div>
            <div class="col-sm-4">
                <p><?php _e('Follow Us:', 'tranquilwp' ); ?></p>
                <i class="fa fa-facebook fa-lg"></i>
                <i class="fa fa-twitter fa-lg"></i>
                <i class="fa fa-google-plus fa-lg"></i>
                <i class="fa fa-pinterest-p fa-lg"></i>
                <i class="fa fa-youtube fa-lg"></i>
            </div><!-- /.col -->
            <div class="col-sm-4">

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="container-fluid" id="copy">
        <div class="col-sm-12">
            <p>&copy; <?php echo date('Y'); ?> <?php _e( 'Theme Star Spa By Tuan Anh Le', 'tranquilwp' ); ?></p>
        </div>
    </div><!-- /.container-fluid -->
</footer>

<?php wp_footer(); ?>
</body>
</html>
