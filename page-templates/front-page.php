<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package Ndrade
 * @subpackage mauad
 * @since 1.0
 */
?>
<?php get_header() ?>
<article class="front-page">
	<!-- slider -->
	<div id="carousel-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-generic" data-slide-to="1"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
<?php
if( have_rows('imagens_slider') ):

	$active = true;
    while ( have_rows('imagens_slider') ) :
		the_row();
		$activeClass = ($active ? 'active' : null);
?>	
			<div class="item <?= $activeClass ?>">
				<img src="<?php the_sub_field('imagem') ?>" alt="..." />
				<div class="carousel-caption">
					<h2><?php the_sub_field('titulo') ?></h2>
					<h3><?php the_sub_field('cidade') ?></h3>
				</div>
			</div>
			
		
<?php	
		$active = false;
    endwhile;
endif;
?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-generic" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-generic" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
	<div id="primary">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-1 col-sm-10">
					<h1>Mauad</h1>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
	</div>
</article>
<?php get_footer() ?>
<!-- EOF -->