<?php /* Template Name: Full Width */  ?>

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
      <article id="post-<?php the_ID(); ?>" class="page">
         <?php the_content(); ?>
      </article>
      <?php endwhile; endif; ?>
   </div>
</div>

<!-- meet the team -->
<?php if ( is_page(array( 54 )) ): ?>
   <section id="team" class="pat1">
   <div class="container">
      <div class="row wp-tabs">
         <?php query_posts('post_type=team&order=ASC&orderby=menu_order'); ?>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h3 class="wp-tab-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="wp-tab-content container">
               <div class="wp-tab-content-wrapper row">
                  <div class="span3">
                     <div class="team-photo">
                        <?php the_post_thumbnail(); ?>
                        <?php the_excerpt(); ?>
                     </div>   
                  </div>
                  <div class="span9">
                     <h2><?php echo do_shortcode( '[types field="page-title"]') ?></h2>
                     <h3><?php echo do_shortcode( '[types field="page-subtitle"]') ?></h3>
                     <?php the_content(); ?>
                  </div>                     
               </div>
            </div>
         <?php endwhile; endif; wp_reset_query(); ?>
         </div>
      </div>
   </section>
<?php endif ?>

<!-- check banner -->
<?php if ( is_page(array( 54 )) ): ?>
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
<?php endif ?>

<?php get_footer(); ?>