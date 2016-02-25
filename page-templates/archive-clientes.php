<?php
/**
 * Template Name: Clientes
 * 
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ndrade
 * @subpackage Mauad
 * @since 1.0
 */

$query_vars = array(
	'post_type' => 'clientes',
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
				<li class="active">Clientes</li>
			</ol>
			<h1>Clientes</h1>
			<div class="row clientes">
<?php
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() )
	{
		$the_query->the_post(); ?>
				<div class="col-xs-6 col-sm-3">
					<?= get_the_post_thumbnail(null, 'galeria-clientes', array('class'=>'img-responsive')) ?>
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