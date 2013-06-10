<?php /* Template Name: Gallery */  ?>

<?php get_header(); ?>

<div id="banner">
   <div class="container">      
      <div class="row">
         <div class="span6">
            <h1><?php echo do_shortcode( '[types field="page-title"]') ?></h1>
         </div>
         <div class="span6">
            <div class="bcr"><?php if(function_exists('bcn_display')){bcn_display();}?></div>
         </div> 
      </div>
   </div>   
</div>

<div class="container">
   <div id="content">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" class="page gallery">
         <?php the_content(); ?>
      </article>
   <?php endwhile; endif; ?>
   </div>
</div>

<section id="team" class="pat1 gallery">
   <div class="container">
      <div class="row wp-tabs">
         <h3 class="wp-tab-title">All</h3>
            <div class="wp-tab-content container">
               <div class="wp-tab-content-wrapper row">
                    <?php echo do_shortcode( "[nggallery id=7 template=caption]") ?>
               </div>
            </div>
     
            <h3 class="wp-tab-title">Beard Transplant</h3>
            <div class="wp-tab-content container">
               <div class="wp-tab-content-wrapper row">
                   <?php echo do_shortcode( "[nggtags gallery=beard]") ?> 
               </div>
            </div>
            
            <h3 class="wp-tab-title">Eyebrow Transplant</h3>
            <div class="wp-tab-content container">
               <div class="wp-tab-content-wrapper row">
                  <?php echo do_shortcode( "[nggtags gallery=eyebrow]") ?>
               </div>
            </div>
            
            <h3 class="wp-tab-title">Female Hair Transplant</h3>
            <div class="wp-tab-content container">
               <div class="wp-tab-content-wrapper row">
                  <?php echo do_shortcode( "[nggtags gallery=female]") ?>
               </div>
            </div>
            
            <h3 class="wp-tab-title">Male Hair Transplant</h3>
            <div class="wp-tab-content container">
               <div class="wp-tab-content-wrapper row">
                  <?php echo do_shortcode( "[nggtags gallery=male]") ?>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="promo-box">
      <div class="container">
         <div class="row">
            <div class="span9">
               <p>Want to know more about FUE hair transplant?</p>
            </div>
            <div class="span3">
               <a class="button" href="contact-us">Free Consultation</a>
            </div>
         </div>
      </div>
   </section>

<?php get_footer(); ?>