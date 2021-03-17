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

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			
			
		<section class="carrousel">
		<div>1</div>
		<div>2</div>
		<div>3</div>
		</section>
		<button id="un">1</button>
		<button id="deux">2</button>
		<button id="trois">3</button>
		
		

			<?php
			$precedent = 0;
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				$titre = get_the_title();
				$session = substr($titre, 4,1);
				$contenu = substr(get_the_title(), 0, 200);
				$resume = substr($contenu, 0, 200);
				?>

				<?php
				if ($session != $precedent){
					echo "<p>Session : " . $session . "</p>";
				}
				$precedent = $session;

				?>

				<p> <?php echo $session . " - " . $titre; ?> </p>
				<p> <?php echo $resume; ?>  </p>
				<?php

			endwhile;

		

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
