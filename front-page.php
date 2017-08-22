<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header intro-header" role="banner" >
		<nav class="navbar navbar-inverse menu-bar navbar-fixed-top">
  			<div class="container-fluid">
	    		<div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			      </button>
			      <h1 class="site-title"><a class="navbar-brand" href="#"  style="color:white;">ODYSSEY</a></h1>
			    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Home</a></li>
			        <li><a href="#">Blogs</a></li>
			        <li><a href="#">Team</a></li> 
			        <li><a href="#">Contacts</a></li> 
			      </ul>
		</div>
  	</div>
</nav>
		<div class="container">
            <div class="row">
                <div id="header-text" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php odyssey_header_title();?>
                </div>
            </div>
        </div>

	</header><!-- #masthead -->
<div id="content" class="site-content container">
	<center><img src="<?php echo get_stylesheet_directory_uri().'/img/arrow.png'?>" class="arrow-down"></center>
	<section class="why-us">
		<div>sdhafkj</div>
	</section>
	<section class="parallex-effect">
		<p>parallex</p>
	</section>
	<section class="blogs">
		blogs
	</section>			
<?php
get_footer();
?>