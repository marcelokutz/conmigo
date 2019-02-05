<?php
/**
 * Template Name: Home page
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

    <?php get_template_part( 'partials/page', 'header' ); ?>

    <?php if( get_field('icone') ) { if( get_field('icone') ) { ?>
    <section class="list-icons">
		<div class="container d-flex row justify-content-between ml-auto mr-auto wow fadeIn">    
	        <?php while( has_sub_field('icone') ){ ?>
	        	<div class="item text-center">
                    <?php if( get_sub_field('icona') ) { ?>
	        		<span class="icon">
	        			<img src="<?php echo get_sub_field('icona'); ?>" alt="<?php echo get_sub_field('titolo'); ?>">
	        		</span>
                    <?php } ?>

                    <?php if( get_sub_field('titolo') ) { ?>
	        		<h2 class="title-icon">
	        			<?php echo get_sub_field('titolo'); ?>
	        		</h2>
                    <?php } ?>
	        	</div>
			<?php } ?>
    	</div>
    </section>
	<?php } } ?>
	<div class="home-bg01">
		<section class="viaggi-content section-content">
			<?php if( get_field('viaggi_testo') ) { ?>
				<div class="page-header wow fadeInUp">
					<?php echo get_field('viaggi_testo'); ?>
				</div>
	        <?php } ?>

			<?php if( have_rows(viaggio_evidenziato) ): ?>
				<div class="list-viaggi">
			    	<div class="container text-center">

						<?php while ( have_rows(viaggio_evidenziato) ) : the_row(); ?>
							<?php $post_object = get_sub_field(viaggi); ?>
							<?php if( $post_object ): ?>
							<?php $post = $post_object; setup_postdata( $post ); ?>
			        			<div class="viaggi-card  text-left row d-flex">
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
							<?php endif; ?>


						<?php endwhile; ?>

						<a href="/viaggi/" class="btn btn-default ml-auto mr-auto" title="TUTTI I VIAGGI">TUTTI I VIAGGI</a>
					</div>
				</div>
			<?php endif; ?>

		</section>

		<section class="blog-content section-content">
			<?php if( get_field('blog_testo') ) { ?>
				<div class="page-header wow fadeInUp">
					<?php echo get_field('blog_testo'); ?>
				</div>
	        <?php } ?>
			<div class="posts-list container row d-flex ml-auto mr-auto">
		        <?php $args = array('post_type' => 'post', 'posts_per_page' => 3 ); $post_query = new WP_Query($args); if($post_query->have_posts() ) { while($post_query->have_posts() ) { $post_query->the_post(); ?>
		        	<div class="post-item col-12 col-lg-4 wow fadeIn">
		        		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			        		<div class="post-card">
			        			<div class="post-img">
	    				            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
			        			</div>
							    <h2><?php the_title(); ?></h2>
							    <p class="date">
							    	<svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									    <g id="Home-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									        <g transform="translate(-455.000000, -3642.000000)" fill="#383634" fill-rule="nonzero" id="Group-14">
									            <g transform="translate(425.000000, 3301.000000)">
									                <g id="clock" transform="translate(30.000000, 341.000000)">
									                    <path d="M9,0 C4.02822581,0 0,4.02822581 0,9 C0,13.9717742 4.02822581,18 9,18 C13.9717742,18 18,13.9717742 18,9 C18,4.02822581 13.9717742,0 9,0 Z M9,16.3636364 C4.93159091,16.3636364 1.63636364,13.0684091 1.63636364,9 C1.63636364,4.93159091 4.93159091,1.63636364 9,1.63636364 C13.0684091,1.63636364 16.3636364,4.93159091 16.3636364,9 C16.3636364,13.0684091 13.0684091,16.3636364 9,16.3636364 Z M11.2497774,12.460256 L8.34922353,10.1707951 C8.24331402,10.0854505 8.18181818,9.95186773 8.18181818,9.81086365 L8.18181818,3.7180033 C8.18181818,3.47310149 8.36630571,3.27272727 8.59179046,3.27272727 L9.68504986,3.27272727 C9.91053461,3.27272727 10.0950221,3.47310149 10.0950221,3.7180033 L10.0950221,8.97597109 L12.3772011,10.779339 C12.5616887,10.9240537 12.5992695,11.2023512 12.4660285,11.4027255 L11.8237386,12.3637796 C11.6904976,12.5604431 11.4342649,12.6049707 11.2497774,12.460256 Z" id="Shape"></path>
									                </g>
									            </g>
									        </g>
									    </g>
									</svg>
									<?php the_time('d F Y'); ?>
								</p>
							    <p><?php echo excerpt(24); ?></p>
						    </div>
					    </a>
				    </div>
			    <?php } } wp_reset_query(); ?>
		    </div>
	    </section>
	</div>

	<?php $chisiamo = get_field('chi_siamo'); if( $chisiamo ) { ?>
		<section class="home-chi-siamo">
			<div class="container row d-flex mr-auto ml-auto">
	        	<?php if($chisiamo['immagine']) { ?>
					<div class="chi-siamo-media col-12 col-lg-7 wow fadeInLeft">
						<img src="<?php echo $chisiamo['immagine']['url']; ?>" alt="<?php echo $chisiamo['immagine']['alt']; ?>">
						<?php if($chisiamo['testo']) { ?>
							<div class="chi-siamo-media-text">
								<p><?php echo $chisiamo['immagine_testo']; ?></p>
								<p class="chi-siamo-name"><?php echo $chisiamo['immagine_nome']; ?></p>
							</div>
			        	<?php } ?>
					</div>
	        	<?php } ?>
	        	<?php if($chisiamo['testo']) { ?>
					<div class="chi-siamo-text col-12 col-lg-5  wow fadeInRight"><?php echo $chisiamo['testo']; ?></div>
	        	<?php } ?>
			</div>
		</section>
	<?php } ?>

<?php get_footer(); ?>