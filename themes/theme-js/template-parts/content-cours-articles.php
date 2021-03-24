<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme.JS
 */

?>
	<article>
				<p> <?php echo $sigle . " - " . $nbHeure . " - " . $typeCours;?> </p>
				<a href="<?php echo get_permalink(); ?>"> <?php echo $titre; ?> </a>
				<p> Session :  <?php echo $session?> </p>
				</article>		
