<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Feminea
 * @since Feminea 1.0
 */

get_header(); ?>
	<div class="menu-header-container">
	<ul id="menu-header" class="menu">
	<li id="menu-item-45" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-45"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#apropos">A Propos</a>
	</li>
<li id="menu-item-46" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-46"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#projets">Projets</a>
</li>
<li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-47"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#contact">Contact</a>
</li>
</ul>
</div>
</header>






<body class="container-fluid">
	<div id="content" class="col-xs-12 col-sm-9 col-sm-offset-3">
<!-- 	<main id="main" class="site-main" role="main">
-->
<div id ="main_header" class="" style="background-image: url(<?php echo get_theme_mod( 'feminea_main_header_background' ); ?>);">
		 <a  href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home">
		<img src="<?php echo get_theme_mod( 'feminea_titre_site' ); ?>">
		</a>

	</div><!-- .entry-header -->






	

	<div class="entry-content">
	<a  href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><div class="col-xs-12 pull-right" id="retour-home">
<i class="fa fa-angle-left fa-3x" aria-hidden="true"></i> 	</a></div>
	<div id="page404" class="col-xs-12 text-center">404</div>
	<div id="page404texte" class="col-xs-12 text-center">Oups, Cette page n'existe pas ! Bonne navigation !</div>
	</div>
	
	
	
		
	



		<!--</main> .site-main -->

		<?php get_footer(); ?>

