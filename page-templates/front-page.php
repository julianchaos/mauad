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
			<li data-target="#carousel-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php bloginfo('template_directory') ?>/images/slider/Slider-01.jpg" alt="..." />
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory') ?>/images/slider/Slider-02.jpg" alt="..." />
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory') ?>/images/slider/Slider-03.jpg" alt="..." />
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
	<h2 class="text-center h3">A imaginação pode nos levar a lugares incríveis...</h2>
	<div id="primary">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-7">
					<h3>... e, muitas vezes, estes lugares estão pertinho de nós.</h3>
					<p>Desde criança nós sonhamos com lugares incríveis. As brincadeiras queestimulam a imaginação, nos levam para o espaço sideral, cavernas, ilhas do tesouro, para o fundo dos oceanos, florestas encantadas e diversos outros cenários imaginários que ilustram nossas fantasias.</p>
					<p>Quando nos tornamos adultos, continuamos sonhando com outros lugares incríveis que vimos em algum filme ou revista, desejamos conhecer outrospaíses, outras culturas e nações ao redor do planeta. Desta vez, os sonhos já não são mais fantasias e se tornam totalmente possíveis.</p>
					<p>Em Petrópolis, existe um lugar especial, daqueles que todo mundo sonha. Planejado para viver com conforto, segurança, qualidade de vida, lazer e o melhor: a poucos minutos, das melhores atrações que você só encontra na Cidade Imperial e em Itaipava.</p>
					<p>Viva o mellhor dos dois mundos. Petrópolis e Itaipava a poucos minutos da sua casa. Desfrute do melhor que Petrópolis pode oferecer em produtos e serviços, diversão e lazer e curta também todo a sofisticação, gastronomia,decoração, moda e todas as diversas atrações de Itaipava.<br>Conheça agora o empreendimento que vai colocar você no ponto mais estratégico de toda a Região Serrana.</p>
				</div>
			</div>
		</div>
	</div>
</article>
<?php get_footer() ?>
<!-- EOF -->