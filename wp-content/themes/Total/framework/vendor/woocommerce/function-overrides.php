<?php
/**
 * WooCommerce function overrides
 *
 * @package Total WordPress Theme
 * @subpackage WooCommerce
 * @version 4.8
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Override product entry title to include link
 *
 * @since 4.8
 */
if ( ! function_exists( 'woocommerce_template_loop_product_title' )
	&& apply_filters( 'wpex_woocommerce_template_loop_product_thumbnail', true ) ) {
	function woocommerce_template_loop_product_title() {
		echo '<a href="' . esc_url( get_permalink() ) . '"><h2 class="woocommerce-loop-product__title">' . get_the_title() . '</h2></a>';
	}
}