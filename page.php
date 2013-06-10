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
   <div class="row">
      <div id="content">
         <?php if (have_posts()): while (have_posts()): the_post(); ?>
         <article id="post-<?php the_ID(); ?>" class="page span8">
            <?php the_content(); ?>
         </article>
         <?php endwhile; endif; ?>
         <?php get_sidebar(); ?>
      </div>
   </div>
</div>

<?php get_footer(); ?>