<?php
/**
 * Template Name: Confecção de Projetos
 * 
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ndrade
 * @subpackage Mauad
 * @since 1.0
 */

$query_vars = array(
	'post_type' => 'projetos',
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
				<li class="active">Confecção de Projetos</li>
			</ol>
			<h1>Confecção de Projetos</h1>
			<div class="row projetos">
<?php
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() )
	{
		$the_query->the_post(); ?>
				<div class="col-xs-6 col-sm-4">
					<?= get_the_post_thumbnail(null, 'galeria-projetos', array('class'=>'img-responsive')) ?>
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