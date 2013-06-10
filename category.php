<?php get_header(); ?>

<div id="content">   
   <h1 class="column12"><?php single_cat_title(); ?></h1>
   <div class="column8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <article id="post-<?php the_ID(); ?>" class="post-excerpt">
            <?php if(has_post_thumbnail()) :?><a class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a><?php endif;?>    
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
             <?php the_excerpt(); ?>
             <div class="meta">
               <span class="categories">
                  <?php foreach((get_the_category()) as $category) {
                     if ($category->cat_name != 'Front Page') {
                        echo '<a href="' . get_category_link( $category->term_id ) . '"  ' . '>' . $category->name.'</a>  |  ';
                     }
                  } ?>
               </span>
               <span class="date"><?php the_time('F jS, Y') ?> | </span>
               <span class="author">by <?php the_author_posts_link(); ?> </span>
               <a class="read-more" href="<?php the_permalink(); ?>">Read More &gt;</a>
            </div>	
         </article>
      <?php endwhile; endif; wp_reset_query(); ?>
      <div class="pagination">
         <?php wp_pagination(); ?>
      </div>
   </div>

   <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>