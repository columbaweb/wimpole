<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]>  <html class="no-js" <?php language_attributes(); ?>> <![endif]-->

<html lang="en-GB" class="no-js">
<head>
<title><?php wp_title(); ?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width" />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

<?php 
 wp_enqueue_script('css3-mediaqueries', get_stylesheet_directory_uri() .'/js/bootstrap.min.js');
 wp_enqueue_script('modernizr', get_stylesheet_directory_uri() .'/js/modernizr.js');

?>

<?php wp_head(); ?>

<script src="//use.typekit.net/hwo1dam.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

</head> 

<body <?php body_class(); ?>>

   <header>
<!-- Top Bar -->   
      <div id="topbar">
         <div class="container">
            <div class="row">
               <div class="span4">
                  <p><?php bloginfo('description'); ?></p>
               </div>
               <div class="span8">   
                  <ul id="social-links" class="unstyled">
                     <li><a id="twitter" href="" target="_blank" >twitter</a></li>
                     <li><a id="google" href="" target="_blank" >google</a></li>
                     <li><a id="facebook" href="" target="_blank" >facebook</a></li>
                     <li><a id="linkedin" href="" target="_blank" >linkedin</a></li>
                     <li><a id="youtube" href="" target="_blank" >linkedin</a></li>
                     <li><a id="rss" href="" target="_blank" >rss</a></li>
                  </ul>
               </div>   
            </div>  
         </div>   
      </div> <!-- topbar end -->
<!-- Main Header -->   
      <div class="container">
         <div class="row">
            <div id="treatments" class="span4">
               <div class="trigger">
                  <p>Treatments</p>
                  <?php wp_nav_menu( array('menu' => 'treatments' )); ?>
               </div>   
            </div>
            
            <div id="logo" class="span4">
               <h1><a href="<?php echo home_url(); ?>" ><?php bloginfo('name'); ?></a></h1>
            </div>
            
            <div id="contacts" class="span4">
               <p><a href="tel:02071234567">020 7935 2617</a><span>13-26 Manchester St, London, W1U 4DJ</span></p>
            </div>
         </div>
      </div>     
   </header>
   
<!-- Navigation -->    
   <div class="navbar-wrapper">
      <div class="container">
         <div class="navbar">
            <div class="navbar-inner">
               
               <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               
               <div class="nav-collapse collapse">
                  <?php wp_nav_menu( array( 'theme_location' => 'topnav' ) ); ?>
               </div> <!--/.nav-collapse -->
            
            </div><!-- /.navbar-inner -->
         </div><!-- /.navbar -->
      </div> <!-- /.container -->
   </div><!-- /.navbar-wrapper -->
	