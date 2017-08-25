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
		<div class="overlay">
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
			        <li><a href="#blogs">Blogs</a></li>
			        <li><a href="#team">Team</a></li> 
			        <li><a href="#contact">Contacts</a></li> 
			      </ul>
		</div>
  	</div>
</nav>
		<div class="container hero-container">
            <div class="row">
                <div id="header-text" class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php odyssey_header_title();?>
                </div>
            </div>
        </div>

		</div>
	</header><!-- #masthead -->
<div id="content" class="site-content container">
	<center><img src="<?php echo get_stylesheet_directory_uri().'/img/arrow.png'?>" class="arrow-down" id="ex-more"></center>
	<section class="about-us">
		<h1 class="section-heading">ABOUT US</h1>
		<br>
		<p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	</section>
</div>
	<section class="parallex-effect">
		
	</section>
<div class="site-content container">
	<section class="blogs" id="blogs">
      	<h1 class="section-heading">BLOGS</h1>
      	<div class="row">
                <?php 
                	$i=1;
                    $args = array('post_type' => 'post','posts_per_page' => 3 );
                    $loop = new WP_Query($args);
                    if($loop->have_posts()):
                      while ($loop->have_posts()): $loop->the_post();?>
                  	<div class="col-md-4 col-sm-6">
	            		<div class="card card<?php echo $i?>">
	                     <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                     <hr>
	                      <?php the_excerpt();
	                      ?>
	                      </div>
        			</div>
              		<?php
              		$i++; 
                     endwhile;
                    endif;
                   wp_reset_postdata();
                ?>
        </div>
	</section>	
	<section class="team" id="team">
		<br>
		<h1 class="section-heading">TEAM</h1>
		<br>
		<div class="row">
				<?php
				// Create the WP_User_Query object
				$roles = array('Administrator', 'Contributor','Editor','Subscriber','Author');
				foreach ($roles as $role)
				{
				$wp_user_query = new WP_User_Query(array( 'role' => $role,'fields' => 'all_with_meta'));

				// Get the results
				$authors = $wp_user_query->get_results();
				// Check for results
				if (!empty($authors)) {
				    // loop through each author
				    foreach ($authors as $author)
				    {
				    	?>		
				    	<div class="col-md-15 col-md-2 col-sm-4 col-xs-6 m-member-data">
				    	<?php
				        // get all the user's date_add()
				        $author_info = get_userdata($author->ID);
				        ?>
				        <center><div class="member-image"><?php echo get_avatar($author->ID, 220 );?></div></center>
				        <br>
				        <?php
				        echo '<h3>'.$author_info->first_name . ' ' . $author_info->last_name.'</h3>';
				        echo '<p>'.$author_info->description.'</p>';
						?>
						</div>
					<?php
				    }
				}
			}
				?>
			</div>
	</section>	
</div>	
<?php
get_footer();
?>
<script>
        jQuery(document).ready(function(){
            jQuery(window).scroll(function() { 
                if (jQuery(document).scrollTop() > 600) { 
                    jQuery(".navbar-fixed-top").css({"background-color":"#f8f8f8","opacity":"0.9"});
                    jQuery(".site-title a").css("color","black");
                    jQuery(".menu-bar.navbar-inverse li a").css("color","black");
                } else {
                jQuery(".navbar-fixed-top").css("background-color", "transparent");
                jQuery(".site-title a").css("color","white");
                jQuery(".menu-bar.navbar-inverse li a").css("color","white");
            }
            });

            jQuery('#ex-more').click(function() {
		                jQuery('html, body').animate({
		                scrollTop: jQuery(".about-us").offset().top-60
		            }, 700);
    		});
        });
        setInterval(function(){
  jQuery('#item1').toggleClass('title');
},3800);
setInterval(function(){
  jQuery('#item2').toggleClass('title1');
},3800);
setInterval(function(){
  jQuery('#item3').toggleClass('title2');
},3800);

    </script>