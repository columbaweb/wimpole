<?php /* Template Name: Sitemap */  ?>

<?php get_header(); ?>

<div id="content">
   
   <div id="slider">
      <?php echo get_new_royalslider(1); ?>
   </div>
   
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
   
   <section id="hp-services">
      <h2><span>Hair Transplant Services</span></h2>
      <div class="container">
         <div class="row">
            <?php query_posts(array('showposts' => 3, 'post_parent' => 55, 'post__in' => array(73,79,75), 'post_type' => 'page', 'orderby' => 'menu_order'));?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <article class="span4" id="post-<?php the_ID(); ?>">
                  <div class="hp-services-wrap">
                     <div class="hp-services-excerpt">
                        <a class="hp-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo do_shortcode( '[types field="excerpt"]') ?></p>
                        <a class="read-more" href="<?php the_permalink(); ?>">Find Out More</a>
                     </div>   
                  </div>   
               </article>
            <?php endwhile; endif; wp_reset_query(); ?>
         </div>
      </div>   
   </section>
   
   <section class="pat1">
      <div class="one_half visible-desktop">
         <h2 ><span class="span6 left"><span>Why Choose Us</span></span></h2>
      </div>
      <div class="one_half last visible-desktop">
         <h2><span class="span6"><span>Before & After</span></span></h2>
      </div>
      <div class="container">
         <div class="row">
            <div class="span6">
               <h2 class="hidden-desktop"><span>Why Choose Us</span></h2>
               <p><strong>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</strong></p>
               <ul class="tick">
                  <li>Central London Hair Clinic</li>
                  <li>Established 25 Years Ago By Mr May</li>
                  <li>One Of UK's Leading Hair Clinics</li>
                  <li>Male & Female Hair Transplant</li>
                  <li>Same Day Surgery Within 5 Hours</li>
                  <li>Accredited By The Hair Authority</li>
               </ul>
            </div>
            <div class="span6">
               <h2 class="hidden-desktop"><span>Before & After</span></h2>
               <?php echo do_shortcode('[slideshow id=7]');  ?>
               <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
            </div>
         </div>
      </div>
   </section>
   
   <section id="facilities">
      <h2><span>Our Facilities</span></h2>
      <div class="container">
         facilities
      </div>
   </section>
   
   <section id="hp-testimonials" class="pat1">
      <h2><span>Patient Testimonials</span></h2>
      <div class="container">
        <div class="row">
           <div class="span6">
              <?php echo do_shortcode( '[testimonialswidget_widget random=true char_limit=150 disable_quotes=true]' ) ?>
              <?php echo do_shortcode( '[testimonialswidget_widget random=true char_limit=150 disable_quotes=true]' ) ?>
           </div>
           <div class="span6">
              <?php echo do_shortcode( '[testimonialswidget_widget random=true char_limit=150 disable_quotes=true]' ) ?>
              <?php echo do_shortcode( '[testimonialswidget_widget random=true char_limit=150 disable_quotes=true]' ) ?>
           </div>
        </div>
        <a href="testimonials">More Tesimonials</a>
      </div> 
   </section>
   
   <section>
      <h2><span>Hair Loss Products</span></h2>
      <div class="container">
         <?php echo get_touchcarousel(1); ?>
      </div>
   </section>
   
</div>

<?php get_footer(); ?>