<?php
/**
 * The template for displaying the footer.
 *
 * Contains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

<footer class="footer text-white" role="contentinfo">

  <div class="grid-container">
    <div class="inner-footer grid-x grid-margin-x grid-margin-y text-center large-text-left padding-vertical-4">

      <div class="cell large-12 medium-12 small-12 align-center text-center">
        <a href="/">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/site_logo_white.svg" width="250" alt="AKM"/>
        </a>
      </div>

      <div class="small-12 medium-12 large-12 cell text-center">
          <p class="text-small">Copyright <?php echo date('Y'); ?>. All Rights Reserved.</p>
      </div>

      <div class="small-12 medium-12 large-12 cell text-center">
        <ul class="menu align-center">
          <li><a href="#" style="color: white"><p class="text-small">Contact Us</p></a></li>
          <li><a href="#" style="color: white"><p class="text-small">Privacy Policy</p></a></li>
          <li><a href="#" style="color: white"><p class="text-small">Cookie Policy</p></a></li>
          <li><a href="#" style="color: white"><p class="text-small">Terms & Conditions</p></a></li>
        </ul>
      </div>


    </div>
  </div>

</footer>

<div class="progress-wrap margin-bottom-2">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

</div>
</div>

<?php wp_footer(); ?>
<div class="cookie"></div>
</body>
</html> <!-- end page -->
