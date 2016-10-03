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
?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/styletimeline.css"> <!-- Resource style -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.js"></script> <!-- Modernizr -->
<?php
get_header(); ?>
	<div class="menu-header-container">
	<ul id="menu-header" class="menu">
	<li id="menu-item-45" class="active-nav menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-45"><a href="#apropos">A Propos</a>
	</li>
<li id="menu-item-46" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-46"><a href="#projets">Projets</a>
</li>
<li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-47"><a href="#contact">Contact</a>
</li>
</ul>
</div>
</header>


<!-- <div class="row xs-visible col-xs-12" id="menu-xs">
						<div id="menu-nav" class="col-md-12">
							<nav class="menuHeader" role="navigation">
								<div class="navbar-header-icons">
									<button   type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
										<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
										<div class="icon-bars" onclick="$('#menu').toggle();">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</div>
									</button>
								</div>

                <div id="menu" class="col-xs-12 xs-visible menu-xs-display-none">
								<div class="col-xs-4 text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#apropos">A propos</a></div>
								<div class="col-xs-4 text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#projets">Projets</a></div>
								<div class="col-xs-4 text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#contact">Contact</a></div>
								</div>
							</nav>
						</div>
					</div>-->



<body class="container-fluid">
	<div id="content" class="col-xs-12 col-sm-9 col-sm-offset-3">


<?php
		// Start the loop.
while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		//twentyfifteen_post_thumbnail();
	?>

	<div id ="main_header" class="" style="background-image: url(<?php echo get_theme_mod( 'feminea_main_header_background' ); ?>);">

		 <a  href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home">
		<img src="<?php echo get_theme_mod( 'feminea_titre_site' ); ?>">
		</a>

	</div><!-- .entry-header -->

	

	<div class="entry-content">
<div id="apropos" class="col-xs-12">
		<h2 class="col-xs-12 text-center" id="titre-apropos"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange.png">A Propos<img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange.png"></h2>
		<div id="apropos1" class="col-xs-12">
			<div class="col-xs-10 col-xs-offset-1 text apropos">
				<?php the_content(); ?>
			</div>
		</div>
		<div id="apropos2" class="col-xs-12">
			<div class="col-xs-10 col-xs-offset-1 text apropos2">
				<img id="chat" class="pull-left" src="<?php bloginfo('stylesheet_directory'); ?>/img/chat.png">
			
				<?php echo get_field('a_propos_2'); ?>
			</div>
		</div>
		<div id="experience" class="col-xs-8 col-xs-offset-2">
			<h3 class="col-xs-12 text-center">Expériences</h3>




			<section id="cd-timeline" class="col-xs-12">

		<div id="timeline1" class="cd-timeline-block">
			<div class="cd-timeline-img text-center">
				<i class="fa fa-heart fa-2x" aria-hidden="true"></i>
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content ">
				<h2><?php the_field('date1') ?></h2>
				<p><?php the_field('texte1') ?></p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div id="timeline2" class="cd-timeline-block">
			<div class="cd-timeline-img text-center">
				<i class="fa fa-cogs fa-2x" aria-hidden="true"></i>
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2><?php the_field('date2') ?></h2>
				<p><?php the_field('texte2') ?></p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div id="timeline3" class="cd-timeline-block">
			<div class="cd-timeline-img text-center">
				<i class="fa fa-laptop fa-2x" aria-hidden="true"></i>
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content ">
				<h2><?php the_field('date3') ?></h2>
				<p><?php the_field('texte3') ?></p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div id="timeline4" class="cd-timeline-block">
			<div class="cd-timeline-img text-center ">
				<i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content ">
				<h2><?php the_field('date4') ?></h2>
				<p><?php the_field('texte4') ?></p>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		
	</section> <!-- cd-timeline -->




		</div>
		<div id="competence" class="col-xs-12 col-sm-4 col-sm-offset-1 text-center">
			<h3 class="text-center">Compétences</h3>
			<img id="roue_competences" src="<?php bloginfo('stylesheet_directory'); ?>/img/competences.png">
		</div>
		<div id="support" class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2">
			<h3 class="text-center">Supports</h3>
			<div class='text support'>
				<span class="list_support">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">OpenClassrooms</span><br>
					<span class="list_support"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">Code Academy</span><br>
					<span class="list_support"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">Blog du Webdesign</span><br>
					<span class="list_support"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">AlsaCréation</span><br>
					<span class="list_support"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">CodePen</span><br>
					<span class="list_support"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">Codin Game</span><br>
					<span class="list_support"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">Livres</span><br>
					<span class="list_support"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/check.png">Tuto sur le web</span><br>
				</div>
			</div>
	
			<div id="cv" class="col-xs-12" >
				<a href="<?php bloginfo('stylesheet_directory'); ?>/CVGaelleHenaf.pdf" target="_blank">Voir mon CV</a>
			</div>
</div>	
			<div id="projets" class="projets col-xs-12">
				<h2 class="col-xs-12 text-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange.png">Projets<img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange.png"></h2>
				<div id="texte-projets" class="col-xs-8 col-xs-offset-2 text-center text">Vous trouverez ici la liste des projets réalisés ces derniers mois. N'hésitez pas à être curieux !!!</div>
				<?php
				$args=array(
					'paged'=> $paged,
					'post_type' => 'projet',
					'post_status' => 'publish',
					'posts_per_page' => 12,
					'ignore_sticky_posts'=> 1);

				$my_query = new WP_Query($args);
				if( $my_query->have_posts()) :
					while ($my_query->have_posts()) : $my_query->the_post(); 
				?>
				<div class="col-sm-4 col-xs-6">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">


						<?php
						$projet = get_post_custom();
						$image = get_field('une');
			 //echo '<pre>';
			 //var_dump($image);
			 //echo '</pre>';
						?> 

						<div class="projet" style="background-image: url('<?php echo $image['url']; ?>');">
							<div class="col-xs-12">
								<h2 class="titre-projet-home text-center col-xs-12"><?php echo mb_substr(get_the_title(),0, 24); if (strlen(get_the_title())>25) { echo '...'; }?></h2>
							</div>
						</div>

					</a>
				</div>
				<?php
				endwhile;
				?>

				<div class="col-md-12 text-center">

				</div>
				<?php

				endif;
				?>

</div>			
			<div id="fraises" class="col-xs-12"></div>

			<div id="contact" class="col-xs-12">
				<h2 class="col-xs-12 text-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange.png">Contact<img src="<?php bloginfo('stylesheet_directory'); ?>/img/losange.png"></h2>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/chocolat.png">
				<div class="col-xs-8 col-xs-offset-2">
					<?php echo do_shortcode('[contact-form-7 id="10" title="Formulaire de contact 1"]'); ?></div>
				</div><!-- .entry-content -->
			</div>



		</article><!-- #post-## -->
		<?php

		// End the loop.
		endwhile;
		?>

		<!--</main> .site-main -->

		<?php get_footer(); ?>
 <!-- //<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>Resource jQuery -->
<script type="text/javascript">

 $(function () {

             var $window = $(window); 	
             $window.scroll(function () {


                 if ($window.scrollTop() < $('#apropos').height() + $('#main-header').height() + $('#menu-xs').height()) {
                    $('#menu-item-45').addClass('active-nav');
                	$('#menu-item-46').removeClass('active-nav');
                	$('#menu-item-47').removeClass('active-nav');
                }
                if ($window.scrollTop() > $('#apropos').height() + $('#main-header').height() + $('#menu-xs').height() && $window.scrollTop() < $('#apropos').height() + $('#main-header').height() + $('#menu-xs').height() + $('#projets').height() + $('#fraises').height() ) {
                    $('#menu-item-45').removeClass('active-nav');
                	$('#menu-item-46').addClass('active-nav');
                	$('#menu-item-47').removeClass('active-nav');
                 }
             	if ($window.scrollTop() > $('#apropos').height() + $('#main-header').height() + $('#menu-xs').height() + $('#projets').height()  + $('#fraises').height() ) {
                    $('#menu-item-45').removeClass('active-nav');
                	$('#menu-item-46').removeClass('active-nav');
                	$('#menu-item-47').addClass('active-nav');	
                 }
             });
         });

 $(function () {

             var $window = $(window); 	
             $window.scroll(function () {


                 if ($window.scrollTop() < $('#titre-apropos').height() + $('#apropos1').height() + $('#apropos2').height() + $('#main-header').height() + $('#menu-xs').height()) {
                    $('#timeline1').addClass('active-timeline');
                }
                 if ($window.scrollTop() < $('#timeline1').height() + $('#titre-apropos').height() + $('#apropos1').height() + $('#apropos2').height() + $('#main-header').height() + $('#menu-xs').height()) {
                    $('#timeline2').addClass('active-timeline');
                }
                 if ($window.scrollTop() < $('#timeline1').height() + $('#timeline2').height() + $('#titre-apropos').height() + $('#apropos1').height() + $('#apropos2').height() + $('#main-header').height() + $('#menu-xs').height()) {
                    $('#timeline3').addClass('active-timeline');
                }
                 if ($window.scrollTop() < $('#timeline1').height() + $('#timeline2').height() + $('#timeline3').height() + $('#titre-apropos').height() + $('#apropos1').height() + $('#apropos2').height() + $('#main-header').height() + $('#menu-xs').height()) {
                    $('#timeline4').addClass('active-timeline');
                }
             });
         });
</script><!-- Resource jQuery -->