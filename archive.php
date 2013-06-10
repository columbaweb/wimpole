<?php get_header(); ?>

<div class="grid_8" id="content">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<div <?php post_class('p_thumb'); ?> >
   <h2><?php the_title(); ?></a></h2>
   <?php the_excerpt(); ?>
</div>
<?php endwhile; endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
