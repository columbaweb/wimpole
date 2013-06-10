<section id="partners">
   <div id="igamerow" class="container">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Image Scroll') ) : ?><?php endif; ?>
   </div>
</section>

<footer>
   <div class="container">
      <div class="row">
         <div class="span7">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?><?php endif; ?>
         </div>
         <div class="span5">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?><?php endif; ?>
         </div>
      </div>
   </div>
   
 <div id="footer-copy">
    <div class="container">
      <div class="row">
         <p class="span6">© <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. <a href="http://www.reynoldsdigital.com">Web design</a> by Reynolds Digital</p>
         <div class="span6">
            <?php wp_nav_menu( array( 'theme_location' => 'footnav' ) ); ?>
         </div>
      </div>
   </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>