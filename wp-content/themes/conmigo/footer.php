<?php
/**
 * The template for displaying the footer.
 *
 * @package Total WordPress Theme
 * @subpackage Templates
 * @version 4.3
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

			<?php wpex_hook_main_bottom(); ?>

		</main><!-- #main-content -->

		<?php wpex_hook_main_after(); ?>

		<?php wpex_hook_wrap_bottom(); ?>

	</div><!-- #wrap -->

	<?php wpex_hook_wrap_after(); ?>

</div><!-- #outer-wrap -->

<?php wpex_outer_wrap_after(); ?>

<?php wp_footer(); ?>
<script type="text/javascript" src="/wp-content/themes/conmigo/assets/dist/js/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/conmigo/assets/dist/js/wow.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/conmigo/assets/dist/js/checkator.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/conmigo/assets/dist/js/main.min.js"></script>

</body>
</html>