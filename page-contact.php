<?php
/**
 *  Template Name: Contact Us
 */

get_header(); ?>

<!-- ========== CONTACT US ========== -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2><?php the_title(); ?></h2>
                <img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider">
            </div><!-- /.col -->
        </div><!-- /.row -->


            <div class="row">
            <div class="col-sm-6 address well">
                <address><i class="fa fa-map-marker"></i>
                    Tranquil Spa<br>
                    Address line 1<br>
                    Address line 2<br>
                    Address line 3<br>
                </address>

                <i class="fa fa-envelope-o"></i>Email: mail@mail.com<br>
                <i class="fa fa-phone"></i>Telephone: 123 456 789
            </div><!-- /.col -->
            <div class="col-sm-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d36706.6797745575!2d-2.9367673999999995!3d54.89998249999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1436115251596" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div><!-- /.col -->
          </div><!-- /.row -->

        <div class="row message-area">
          <div class="col-sm-12">
          <!-- put the form in a well to stand out -->
          <?php echo do_shortcode( '[contact-form-7 id="26" title="Contact"]' ); ?>

          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.section -->


<?php get_footer(); ?>
