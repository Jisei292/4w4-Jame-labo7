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
		
		</section>
		<section class="ctrl-carrousel"> 
		<input class="rad-carrousel" type="radio" name="rad-carrousel">
		<input class="rad-carrousel" type="radio" name="rad-carrousel">
		<input class="rad-carrousel" type="radio" name="rad-carrousel">
		</section>

		
		<section class="list-cours"> 

			<?php
			$precedent = "XXXXXXX";
			$chaine_bouton_radio = '';
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				convertirtableau($tPropriete);
				if ($tPropriete['typeCours'] != $precedent): 
				if ($precedent != "XXXXXXX"): ?>
				<?php if ($precedent == "Web") ?>
				<section class="ctrl-carrousel"> 
				<?php echo $chaine_bouton_radio; ?>
				</section>
				
				</section>
				<?php endif ?>
				<h2><?php echo $tPropriete['typeCours'] ?></h2>
				<section <?php echo($tPropriete['typeCours']=='Web'? 'class="carrousel-2"' : '' ); ?>>		
				<?php endif ?>			
				<?php if ($tPropriete['typeCours'] == "Web") : 
					get_template_part( 'template-parts/content', 'cours-carrousel' ); 
					$chaine_bouton_radio .= '<input class="rad-carrousel" type="radio" name="rad-carrousel">';
				else : 
					get_template_part( 'template-parts/content', 'cours-articles' ); 
					
				endif;
				
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