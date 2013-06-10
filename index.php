<?php get_header(); ?>

<div id="content">
   <div id="slider">
   </div>
   
   <section id="promo-box" class="column12">  
      <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin velit sapien, gravida et venenatis at, sollicitudin aliquet dui. Nulla facilisi. Sed vestibulum, quam ultricies suscipit volutpat, nibh enim semper justo, at condimentum urna eros ut justo. Nulla suscipit, erat a pretium hendrerit, augue turpis feugiat ligula, quis fringilla sapien ligula a lectus</p>
   </section>
   
   <?php query_posts(array('showposts' => 4, 'post_parent' => 55, 'post__in' => array(81,79,75,73), 'post_type' => 'page'));?>
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="column3 home-excerpt" id="post-<?php the_ID(); ?>">
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span>Read More</span></a></h2>
         <?php echo excerpt('35'); ?>
      </article>
   <?php endwhile; endif; wp_reset_query(); ?>
   
   <section class="column6" style="margin-top:20px;">
      <h2>Latest From Hair Clinic</h2>
      <?php query_posts('category_name=uncategorized&posts_per_page=5'); ?>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="alpha" id="post-<?php the_ID(); ?>">
               <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
               <div class="meta">
                  <span class="date"><?php the_time('F jS, Y') ?> | </span>
                  <span class="author"><?php the_author_posts_link(); ?> | </span>
                  <span class="categories">
                     <?php foreach((get_the_category()) as $category) {
                        if ($category->cat_name != 'Front Page') {
                           echo '<a href="' . get_category_link( $category->term_id ) . '"  ' . '>' . $category->name.'</a>   ';
   		      }
                     } ?>
                  </span>
               </div>
               <a class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>      
               <?php the_excerpt(); ?>
               <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
            </div>   
         <?php endwhile; endif; wp_reset_query(); ?>
	</section>
	
	<div class="column6">

         <form action="<?php bloginfo('url'); ?>/" method="get">
            <?php
               $select = wp_dropdown_pages();
               $select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
               echo $select;
            ?>
            <noscript><input type="submit" value="View" /></noscript>
            
	</form>
         
	  
	</div>
</div>

<?php get_footer(); ?>



		