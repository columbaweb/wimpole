<?php get_header(); ?>

<div id="banner">
   <div class="container">      
      <div class="row">
         <div class="span6">
            <h1><?php
                     foreach((get_the_category()) as $childcat) {
                     $parentcat = $childcat->category_parent;
                     if ($parentcat) break;  // Save only first parent
                     }
                     $sep = '';
                     $parentname = '';
                     if ($parentcat) {
                     $parentname = get_cat_name($parentcat);
                     echo $parentname;
                     $sep = '&nbsp;/&nbsp;';
                     }
                     foreach (get_the_category() as $category) {
                     $cat_name = $category->cat_name;
                     if ($cat_name != $parentname) {
                     echo $sep;
                     echo $cat_name;
                     }
                     $sep = '&nbsp;/&nbsp;';
                     }
                  ?></h1>
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
         <article id="post-<?php the_ID(); ?>" class="post span8">
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
   </div>
</div>

<?php get_footer(); ?>