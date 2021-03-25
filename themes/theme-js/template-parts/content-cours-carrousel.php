<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme.JS
 */
global = $tPropriete

?>
<article>
	<p> <?php echo $tPropriete['sigle'] . " - " . $tPropriete['typeCours'] . " - " . $tPropriete['nbHeure'];?> </p>
	<a href="<?php echo get_permalink(); ?>"> <?php echo $tPropriete['titre']; ?> </a>
	<p> Session :  <?php echo $tPropriete['session']?> </p>
</article>	
