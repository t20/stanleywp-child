<?php
/**
 * File used for homepage static page content module
 *
 * @package WordPress
 */
?>

  <!-- +++++ Welcome Section +++++ -->
  <div id="ww">
      <div class="container">
      <div class="row">
  <div class="col-lg-10 col-lg-offset-1">
      <?php while( have_posts() ) : the_post(); ?>

          <?php if ( has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
          <?php endif; ?>

          <?php the_content(); ?>

       <?php endwhile; ?>
              </div><!-- /col-lg-8 -->
          </div><!-- /row -->
      </div> <!-- /container -->
  </div><!-- /ww -->

