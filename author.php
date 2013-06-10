<?php get_header(); ?>

<div id="banner">
   <div class="container">
      <h1>About the Author</h1> 
   </div>
</div>

<div class="container">
   <div class="row">
      <div id="content">
         <article id="post-<?php the_ID(); ?>" class="page span8">
            <?php $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author')); ?>
            <section class="post-author">
               <?php the_author_image();?>
               <h1><?php echo $curauth->nickname; ?></h1>
               <p><?php echo $curauth->user_description; ?></p>
            </section>
            
            <h3>Posts by  <?php echo $curauth->nickname; ?>:</h3>
            <section class="author-posts">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <ul class="bullet">
                     <li>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                        <?php the_title(); ?></a>,
                        <?php the_time('d M Y'); ?> in <?php the_category('&');?>
                     </li>   
                  </ul>
               <?php endwhile; else: ?>
                  <p>No posts by this author</p>
               <?php endif; ?>
            </section>   
         </article>
      
         <?php get_sidebar(); ?>      
      </div>
   </div>
</div>

<?php get_footer(); ?>