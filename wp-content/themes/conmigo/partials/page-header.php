<?php $page_header = get_field('page_header');	
if( $page_header ): ?>
	<div class="page-header-bg">
		<div class="content">
			<div class="container">
				<p class="wow fadeInLeft"><?php echo $page_header['sottotitolo']; ?></p>
				<h2 class="wow fadeInLeft" data-wow-delay="0.4s"><?php echo $page_header['titolo']; ?></h2>
			</div>
		</div>
		<div class="page-header-img" style="background-image: url('<?php echo $page_header['background']; ?>');"></div>
	</div>
<?php endif; ?>