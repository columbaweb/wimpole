<?php get_header(); ?>

  <div id="content">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
         <article id="post-<?php the_ID(); ?>" class="page column8">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
         </article>
      <?php endwhile; endif; ?>   
      
      <?php get_sidebar(); ?>
   </div>
   
<?php get_footer(); ?>