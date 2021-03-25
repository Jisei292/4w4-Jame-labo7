<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme.JS
 */

get_header();
?>
/////////////////////////////////////////////////////////////////////////////////////////////////// front-page.php
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<!-- carrousel -->
		<section class="carrousel-2">
		<article class="slide__conteneur">
			<div class="slide">
			<image src="" alt="">
			<div>
			<p>Darksider Wiki</p>
			<a href="https://darksiders.fandom.com/wiki/Darksiders_Wiki">SiteWeb</a>
			<p>Page Principal</p>
			</div>
			</div>
		</article>
		<article class="slide__conteneur">
			<div class="slide">
			<image src="" alt="">
			<div>
			<p>Darksider Wiki</p>
			<a href="https://darksiders.fandom.com/wiki/Darksiders_Wiki">SiteWeb</a>
			<p>Page Principal</p>
			</div>
			</div>
		</article>
		<article class="slide__conteneur">
			<div class="slide">
			<image src="" alt="">
			<div>
			<p>Darksider Wiki</p>
			<a href="https://darksiders.fandom.com/wiki/Darksiders_Wiki">SiteWeb</a>
			<p>Page Principal</p>
			</div>
			</div>
		</article>
		</section>
		<section class="ctrl-carrousel"> 
		<input class="rad-carrousel" type="radio" name="rad-carrousel">
		<input class="rad-carrousel" type="radio" name="rad-carrousel">
		<input class="rad-carrousel" type="radio" name="rad-carrousel">
		</section>

		
		<section class="list-cours"> 

			<?php
			$precedent = "XXXXXXX";
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				convertirtableau($tPropriete);

				/* $titre_grand = get_the_title();   
				$session = substr($titre_grand, 4,1);
				$nbHeure = substr($titre_grand, -4,3);
				$titre = substr($titre_grand, 8, -6);
				$sigle = substr($titre_grand, 0, 7);
				$typeCours = get_field('type_de_cours'); */
				
				if ($tPropriete['typeCours'] != $precedent): 
				if ($precedent != "XXXXXXX"): ?>

				</section>
				<h2><?php echo $typeCours ?></h2>
				<?php endif ?>
				<section>
				
				
				<?php endif ?>
			
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
				$precedent = $tPropriete['typeCours'];
			endwhile; ?>
		
			</section>
		<?php endif;?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

function convertirtableau(&$tPropriete)
{

	/* $titre_grand = get_the_title();   
				$session = substr($titre_grand, 4,1);
				$nbHeure = substr($titre_grand, -4,3);
				$titre = substr($titre_grand, 8, -6);
				$sigle = substr($titre_grand, 0, 7);
				$typeCours = get_field('type_de_cours'); */


	$tPropriete['titre'] = get_the_title();
	$tPropriete['session'] = substr($tPropriete['titre'], 4,1);
	$tPropriete['nbHeure'] = substr($tPropriete['titre'], -4,3);
	$tPropriete['titre'] = substr($tPropriete['titre'], 8, -6);
	$tPropriete['sigle'] = substr($tPropriete['titre'], 0, 7);
	$tPropriete['typeCours'] = get_field('type_de_cours');

}

?>