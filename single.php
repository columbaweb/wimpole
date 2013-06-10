<?php get_header(); ?>
<div id="content">
   <article id="post-<?php the_ID(); ?>" class="post column8">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <h1><?php the_title(); ?></h1>
         <?php the_content(''); ?>
      <?php endwhile; else: ?>
         <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
   
      <div class="p_nav">
         <div class="alignright"><?php next_post_link('%link', 'Next &raquo', TRUE, '3'); ?></div>
         <div class="alignleft"><?php previous_post_link('%link', '&laquo Previous', TRUE, '3'); ?> </div>
      </div>
   </article>
   
   <?php get_sidebar(); ?>
   
</div>


<?php get_footer(); ?>