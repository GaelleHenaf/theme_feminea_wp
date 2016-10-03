

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




<div id ="main_header" class="" style="background-image: url(<?php echo get_theme_mod( 'feminea_main_header_background' ); ?>);">

	<a  href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home">
		<img src="<?php echo get_theme_mod( 'feminea_titre_site' ); ?>">
		</a>

</div><!-- .entry-header -->

<div class="entry-content">
<a  href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><div class="col-xs-12 pull-right" id="retour-home">
<i class="fa fa-angle-left fa-3x" aria-hidden="true"></i> 	</a></div>
	<h2 class="col-xs-12 text-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange.png"> <?php the_title(); ?> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange.png"></h2>

	<?php $une = get_field('une'); ?>
	<div id="projet_une" class="col-xs-10 col-xs-offset-1 text-center" >
		<img  src="<?php echo $une['url']; ?>"> 
	</div> 
	<div class="col-xs-12" id="transition1">
	<div id="transition1haut" class="col-xs-12"></div>
	<!--
					<?php $dateMiseCirculation = date_create(get_field('date_mise_en_circulation')); ?>
					Date de 1ère Mise en circulation : <?php echo date_format($dateMiseCirculation,"d/m/Y");?> <br> -->
					</div>
					<div id="transition1bas" class="col-xs-12"><div id="lien_projet" class="col-xs-12 pull-right">
 <a href="<?php the_field('lien');?>"> le lien </a> 
 </div></div>
					

					<div id="description_projet" class="col-xs-12">
					<h3  class="col-xs-12 text-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange-blanc.png"> Description du Projet <img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange-blanc.png"></h3>
				<div id="info-projet" class="col-xs-8 col-xs-offset-2">
					<p><i class="fa fa-clock-o" aria-hidden="true"></i>  Durée : <?php the_field('duree') ?></p>
					<p><i class="fa fa-user" aria-hidden="true"></i>  Client : <?php the_field('client') ?></p>
					<p><i class="fa fa-ellipsis-h" aria-hidden="true"></i>  Descriptif court : <?php the_field('descriptif_court') ?></p><br>
				</div>
<?php 
while ( have_posts() ) : the_post();
	?> 
	<div id="content_projet" class="col-xs-10 col-xs-offset-1">
	<?php the_content();?>
	</div>
	<?php
				endwhile;

?>
<div class="col-xs-10 col-xs-offset-1">
<div class="col-md-3 liste_description_projet col-xs-6">
<div class="col-xs-12">
<h4 class="text-center">CMS</h4>
<?php
 $cms= get_field_object('cms');
$value1 = $cms['value'];
$choices1 = $cms['choices'];

if( $value1 ): ?>
<ul>
	<?php foreach( $value1 as $v ): ?>
	<li>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">
		<?php echo $choices1[ $v ]; ?>
	</li>
	<?php endforeach; ?>
</ul>
<?php else: ?>
	<p class="text-center">Pas de CMS signalés</p>
<?php endif; 
?>
</div>
</div>
<div class="col-md-3 liste_description_projet col-xs-6">
<div class="col-xs-12">
<h4 class="text-center">Framework</h4>
<?php
 $framework= get_field_object('framework');
$value2 = $framework['value'];
$choices2 = $framework['choices'];

if( $value2 ): ?>
<ul>
	<?php foreach( $value2 as $v ): ?>
	<li>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">
		<?php echo $choices2[ $v ]; ?>
	</li>
	<?php endforeach; ?>
</ul>
<?php else: ?>
	<p class="text-center">Pas de framework signalés</p>
<?php endif; 
?>
</div>
</div>
<div class="col-md-3 liste_description_projet col-xs-6">
<div class="col-xs-12">
<h4 class="text-center">Languages</h4>
<?php
 $languages= get_field_object('languages');
$value3 = $languages['value'];
$choices3 = $languages['choices'];

if( $value3 ): ?>
<ul>
	<?php foreach( $value3 as $v ): ?>
	<li>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">
		<?php echo $choices3[ $v ]; ?>
	</li>
	<?php endforeach; ?>
</ul>
<?php else: ?>
	<p class="text-center">Pas de languages signalés</p>
<?php endif; 
?>
</div>
</div>
<div class="col-md-3 liste_description_projet col-xs-6">
<div class="col-xs-12">
<h4 class="text-center">Outils</h4>
<?php
 $outils_utilises= get_field_object('outils_utilises');
$value4 = $outils_utilises['value'];
$choices4 = $outils_utilises['choices'];

if( $value4 ): ?>
<ul>
	<?php foreach( $value4 as $v ): ?>
	<li>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">
		<?php echo $choices4[ $v ]; ?>
	</li>
	<?php endforeach; ?>
</ul>
<?php else: ?>
	<p class="text-center">Pas d'Outils signalés</p>
<?php endif; ?>

</div>
</div>
</div>
				

					</div>
					<div id="transition2haut" class="col-xs-12"></div>

					<div id="transition2bas" class="col-xs-12"></div>

					<div class="transition col-xs-12">
						<h3  class="col-xs-12 text-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange-clair.png"> Chartre graphique <img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange-clair.png"></h3>
						<div class="col-xs-12">
							<div class="couleur">
								<div style="background:<?php the_field('couleur_1');?>;"></div>

							</div> 
							<div class="couleur">
							<div style="background:<?php the_field('couleur_2');?>;"></div>

						</div> 
						<div class="couleur">
						<div style="background:<?php the_field('couleur_3');?>;"></div>

					</div> 
					<div class="couleur">
					<div  style="background:<?php the_field('couleur_4');?>;"></div>

				</div> 
				<div class="couleur">
				<div style="background:<?php the_field('couleur_5');?>;"></div>
			</div>
		</div>
		<h3  class="col-xs-12 text-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange-clair.png"> Galerie <img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange-clair.png"></h3>
		<?php
		$posts = get_field('gallery');

		if( $posts ): ?>
		<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			<?php setup_postdata($post); ?>
			<?php $url = $post->guid?>
			<div class="item_gallery col-xs-4">
				<a class="img-responsive" href="<?php echo $url;  ?>" data-rel="lightbox-gallery-1">

					<img class="col-xs-12" src="<?php echo $url;  ?>">
				</a>
			</div>

		<?php endforeach; ?>
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>
</div>

<!--</main> .site-main -->

<?php get_footer(); ?>

