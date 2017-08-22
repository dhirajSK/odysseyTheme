<?php
/**
 * Template part for displaying top navigation
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package odyssey
 */

?><nav class="navbar navbar-default navbar-custom navbar-fixed-top" id="top-nav">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll site-title">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'odyssey' ); ?></span>
			<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php
				if ( has_nav_menu( 'menu-1' ) ) {
					$args = array(
						'theme_location' => 'menu-1',
						'container' => 'ul',
						'menu_class' => 'nav navbar-nav navbar-right',
						'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth' => 0,
						'walker' => new Walker_Nav_Top(),
						'fallback_cb' => 'wp_page_menu'
					);
					wp_nav_menu( $args );
				}
			?>
		</div>
	<!-- /.navbar-collapse -->
	</div>
<!-- /.container -->
</nav>