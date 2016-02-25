<?php
/**
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
				<li>Home</li>
				<li>Obras</li>
				<li class="active"><?php the_title() ?></li>
			</ol>
			<div class="row">
				<div class="col-xs-12">
					<a href="javascript: history.go(-1);" class="obras-voltar">&lt; Voltar</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 obras-galeria">
					<div class="row">
<?php
$galeria = get_field('galeria');
foreach($galeria as $galeriaItem)
{
	$imagem = $galeriaItem['imagem'];
?>
						<div class="col-xs-6 col-md-4">
							<a href="<?= $imagem['sizes']['large'] ?>" class="cboxElement" title="<?= $imagem['title'] ?>">
								<img src="<?= $imagem['sizes']['thumbnail'] ?>" alt="<?= $imagem['alt'] ?>" class="img-responsive colorbox-<?= get_the_ID() ?>">
								<div class="mask"></div>
							</a>
						</div>
<?php
} ?>
						
					</div>
				</div>
				<div class="col-xs-12 col-sm-8">
					<h1><?php the_title() ?></h1>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					<p class="obras-ano"><strong>Ano: </strong><?php the_field('ano') ?></p>
					<p class="obras-local"><strong>Local: </strong><?php the_field('cidade') ?> - <?php the_field('uf') ?></p>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
</article>
<?php get_footer() ?>
<!-- EOF -->