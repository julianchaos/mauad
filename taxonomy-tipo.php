<?php
/**
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ndrade
 * @subpackage Mauad
 * @since 1.0
 */

$query_vars = array(
	'taxonomy' => 'tipo',
	'term' => $wp_query->query_vars['tipo'],
	'nopaging' => true
);
$the_query = new WP_Query( $query_vars );

?>
<?php get_header() ?>
<article class="commom-content">
	<div id="primary" class="container">
		<div id="content" role="main">
			<ol class="breadcrumb">
				<li>Home</li>
				<li class="active"><?= $wp_query->queried_object->name ?></li>
			</ol>
			<h1><?= $wp_query->queried_object->name ?></h1>
			<p>Passe o mouse sobre as imagens para conhecer os projetos</p>
			<div class="row obras">
<?php
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() )
	{
		$the_query->the_post(); ?>
				<div class="col-xs-6 col-md-3">
					<p>
						<?= get_the_post_thumbnail(null, 'galeria-obras', array('class'=>'img-responsive')) ?>
					</p>
					<div>
						<a href="<?= the_permalink() ?>">
							<h1><?= the_title() ?></h1>
						</a>
					</div>
				</div>
<?php
	}
endif;
?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
</article>
<?php get_footer() ?>
<!-- EOF -->