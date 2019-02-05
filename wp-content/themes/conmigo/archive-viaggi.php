<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
	<?php query_posts('page_id=94'); if ( have_posts() ) : the_post(); ?>
    	<?php get_template_part( 'partials/page', 'header' ); ?>
	<?php endif; wp_reset_query(); ?>

		<section class="viaggi-content section-content">
			<?php query_posts('page_id=94'); if ( have_posts() ) : the_post(); ?>
				<div class="container">
					<div class="row d-flex align-items-baseline">
						<div class="col-12 col-lg-6 text-content wow fadeInUp">
							<?php the_content(); ?>
						</div>
						<?php if( get_field('messaggio') ) { ?>
							<?php $messaggio = get_field('messaggio'); if( $messaggio ) { ?>
								<div class="col-12 col-lg-6 message-block wow fadeInUp">
									<?php echo $messaggio['testo']; ?>
									<p class="name"><?php echo $messaggio['nome']; ?></p>
								</div>
							<?php } ?>
			        	<?php } ?>
					</div>
	        	</div>
			<?php endif; wp_reset_query(); ?>

				<div class="list-viaggi">
			    	<div class="container text-center">
                	<?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        	<div class="viaggi-card text-left row d-flex">
								<div class="viaggi-card-content col-12">
				                    <div class="d-flex row">
				                    	<div class="col-12 col-lg-6">
											<?php if( get_field('data_del_viaggio') ) { ?>
								        		<p class="viaggi-date wow fadeInLeft">
								        			<span class="icon-calendar"></span>
								        			<?php echo get_field('data_del_viaggio'); ?>
								        		</p>
						                    <?php } ?>
						        			<h2 class="viaggi-title text-uppercase wow fadeInLeft" data-wow-delay="0.3s"><?php the_title(); ?></h2>
						                    <a href="<?php the_permalink(); ?>" class="btn-more text-uppercase wow fadeInLeft" data-wow-delay="0.6s">Scopri di piú</a>
						                </div>
						            </div>
				        			<?php if( get_field('prezzo') ) { ?>
						        		<p class="viaggi-price text-center wow fadeInUp" data-wow-delay="0.6s">
						        			<span class="small">a partire da</span>
						        			<?php echo get_field('prezzo'); ?>
						        		</p>
				                    <?php } ?>
					            </div>
					            <div class="viaggi-img" style="background-image: url('<?php echo get_field('immagine_di_sfondo'); ?>')"></div>
							<?php wp_reset_postdata(); ?>

		        			</div>
                        <?php endwhile; ?>

                    <?php endif; ?>

					</div>
                    <div class="bg-nav text-center wow fadeIn">
                    	<?php wp_pagenavi(); ?>
                    </div>
				</div>

		</section>


<?php get_footer(); ?>