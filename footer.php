<?php
/**
 * @package Ndrade
 * @subpackage mauad
 * @since 1.0
 */
?>
			<footer>
				<div class="container">
					<div class="row" role="contentinfo">
						<div class="col-xs-12 col-sm-10 mauad-footer-info">
							<a href="<?php echo home_url() ?>/" title="<?php bloginfo('name') ?>">
								<img src="<?php bloginfo('template_directory') ?>/images/layout/logo-footer.png" class="img-responsive" alt="<?php bloginfo('name') ?>" />
							</a>
							<p>Copyright &copy; Mauad 2014. All Rights Reserved</p>
						</div>
						<div class="col-xs-12 col-sm-2 assinaturas">
							<a href="http://www.rds.com.br/" target="_BLANK">
								<img src="<?php bloginfo('template_directory') ?>/images/layout/logo-rds-footer.png" class="img-responsive" alt="RDS" />
							</a>
						</div>
					</div>
				</div>
			</footer>
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
