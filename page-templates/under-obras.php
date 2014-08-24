<?php
/**
 * Template Name: Subpáginas Obras
 * 
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ndrade
 * @subpackage Mauad
 * @since 1.0
 */
?>
<?php get_header() ?>
<article class="commom-content">
	<div id="primary" class="container">
		<div id="content" role="main">
			<ol class="breadcrumb">
				<li>OBras</li>
				<li class="active"><?php the_title() ?></li>
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