<?php $form_prenota = get_field('form_prenota');	
if( $form_prenota ): ?>
	<div class="form-prenota d-flex row">
		<div class="container">
			<div class="row d-flex align-items-center ml-0 mr-0">
				<div class="col-12 col-lg-6 wow fadeInLeft">
					<?php echo $form_prenota['testo']; ?>
				</div>
				<div class="col-12 col-lg-6 wow fadeInRight">
					 	<?php echo get_field('form_shortcode') ?>
					 <?php if(get_field('form_shortcode')) { ?>
					 <?php } ?>
					<?php echo do_shortcode('[contact-form-7 id="6" title="Modulo di contatto 1"]'); ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>