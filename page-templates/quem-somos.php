<?php
/**
 * Template Name: Quem Somos
 * 
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ndrade
 * @subpackage Mauad
 * @since 1.0
 */
?>
<?php get_header() ?>
<article class="commom-content quem-somos">
	<div id="primary" class="container">
		<div id="content" role="main">
			<img class="alignright" alt="Quem Somos" src="<?php bloginfo('template_directory') ?>/images/quem-somos.png" />
			<ol class="breadcrumb">
				<li>Mauad</li>
				<li class="active">Quem Somos</li>
			</ol>
			<h1><?php the_title() ?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</article>
<?php get_footer() ?>
<!-- EOF -->