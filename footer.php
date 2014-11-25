<?php
/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        StanleyWP
 * @author         Brad Williams & Carlos Alvarez
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
</div><!-- end of wrapper-->
<?php gents_wrapper_end(); // after wrapper hook ?>


<?php gents_container_end(); // after container hook ?>


  <!-- +++++ Footer Section +++++ -->
<footer id="footer">
<div class="container">
      <div class="row">
        <div class="col-lg-3">
          <?php dynamic_sidebar('footer-col1'); ?>
        </div>
        <div class="col-lg-3">
          <?php dynamic_sidebar('footer-col2'); ?>
        </div>
        <div class="col-lg-3">
          <?php dynamic_sidebar('footer-col3'); ?>
        </div>
        <div class="col-lg-3">
          <?php dynamic_sidebar('footer-col4'); ?>
        </div>

      </div><!-- /row -->
    </div><!-- /container -->
</footer><!-- end #footer -->




<?php wp_footer(); ?>

</body>
</html>
