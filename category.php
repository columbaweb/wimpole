<?php get_header(); ?>

<div id="banner">
   <div class="container">      
      <div class="row">
         <div class="span6">
            <h1><?php single_cat_title(); ?></h1>
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
         <div class="span8">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <article id="post-<?php the_ID(); ?>" class="post-excerpt">
                  <div class="author-image"><?php the_author_image(); ?></div>
                  <div class="postexcerpt">
                     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <?php the_excerpt(); ?>
                      <div class="meta">
                        <span class="categories">
                           <?php foreach((get_the_category()) as $category) {
                              if ($category->cat_name != 'Front Page') {
                                 echo '<a href="' . get_category_link( $category->term_id ) . '"  ' . '>' . $category->name.'</a>  /  ';
                              }
                           } ?>
                        </span>
                        <span class="date"><?php the_time('F jS Y') ?> / </span>
                        <span class="author">by <?php the_author_posts_link(); ?> </span>
                        <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                     </div>
                   </div>   	
               </article>
            <?php endwhile; endif; wp_reset_query(); ?>
            <div class="pagination">
               <?php wp_pagination(); ?>
            </div>
         </div>
        
         <?php get_sidebar(); ?>
      </div>
   </div>
</div>

<?php get_footer(); ?>