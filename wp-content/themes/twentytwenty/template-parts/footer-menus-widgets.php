<?php
/**
 * Displays the menus and widgets at the end of the main element.
 * Visually, this output is presented as part of the footer element.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$isFooterForm = is_active_sidebar('footer-form');

// Only output the container if there are elements to display.
if ( $has_footer_menu || $has_social_menu || $has_sidebar_1 || $has_sidebar_2 ) {
	?>
			<?php if ( $isFooterForm ) { ?>

				<aside class="footer-widgets-outer-wrapper" role="complementary">

					<div class="footer-widgets-wrapper">

						<?php if ( $has_footer_menu ) { ?>

							<div class="footer-widgets column-one grid-item">
								<?php dynamic_sidebar( 'footer-form' ); ?>
							</div>

						<?php } ?>

					</div><!-- .footer-widgets-wrapper -->

				</aside><!-- .footer-widgets-outer-wrapper -->

			<?php } ?>

<?php } ?>