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
			<div class="item active">
				<img src="<?php bloginfo('template_directory') ?>/images/slide/slide-01.jpg" alt="..." />
				<div class="carousel-caption">
					<h2>Fundação Oscar Niemayer</h2>
					<h3>Rio de Janeiro</h3>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory') ?>/images/slide/slide-01.jpg" alt="..." />
				<div class="carousel-caption">
					<h2>Teste</h2>
					<h3>teste</h3>
				</div>
			</div>
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
					<p>Da segunda geração de uma família de arquitetos nasceu o desejo de resgatar o trabalho de arquitetura pela assunção da responsabilidade e coordenação de todas as fases do empreendimento.</p>
					<p>Entendemos que a harmonia e a beleza de uma construção não se encerram no projeto, nascem dele e se consolidam na obra acabada, depois de retirado o último andaime.</p>
					<p>Desejamos criar e, mais do que isso, essencialmente, realizar.</p>
				</div>
			</div>
		</div>
	</div>
</article>
<?php get_footer() ?>
<!-- EOF -->