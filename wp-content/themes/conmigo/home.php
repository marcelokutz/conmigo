<?php
/**
 * Template Name: Archive viaggi
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
	<?php global $post; $page_for_posts_id = get_option('page_for_posts'); if ( $page_for_posts_id ) : $post = get_page($page_for_posts_id); setup_postdata($post); ?>
    	<?php get_template_part( 'partials/page', 'header' ); ?>
    <?php rewind_posts(); endif;?>

		<section class="blog-content section-content">

			<div class="posts-list container">
            	<?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    	<div class="post-item row d-flex wow fadeIn">
		        			<div class="post-img col-12 col-lg-5">
    				            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
		        			</div>
		        			<div class="post-descr col-12 col-lg-7">
							    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
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
							    <p><?php echo excerpt(50); ?></p>
		        				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="lk-more">Approfondisci</a>
		        			</div>
					    </div>
					<?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>

                <?php endif; ?>
                <div class="bg-nav text-center wow fadeIn">
                	<?php wp_pagenavi(); ?>
                </div>
			</div>

		</section>


<?php get_footer(); ?>