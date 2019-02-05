<?php $blog_header = get_field('immagine_di_sfondo_grande');	
if( $blog_header ): ?>
	<div class="page-header-bg">
		<div class="content text-center">
			<div class="container">
				<p class="wow fadeInLeft">BLOG</p>
				<h2 class="wow fadeInLeft" data-wow-delay="0.4s"><?php the_title(); ?></h2>
			</div>
		</div>
		<div class="page-header-img" style="background-image: url('<?php echo $blog_header; ?>');"></div>
	</div>
<?php endif; ?>