<?php get_header(); ?>

<div id="banner">
   <div class="container">      
      <div class="row">
         <div class="span6">
            <h1>Shop</h1>
         </div>
         <div class="span6">
            <div class="bcr"><?php if(function_exists('bcn_display')){bcn_display();}?></div>
         </div> 
      </div>
   </div>   
</div>

<div class="container shop">
   <div id="content">
      <?php woocommerce_content(); ?> 
   </div>
</div>

<?php get_footer(); ?>