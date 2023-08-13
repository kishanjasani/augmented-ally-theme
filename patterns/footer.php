<?php
/**
 * Title:          Footer
 * Slug:           augmentedally/footer
 * Description:    Footer pattern.
 * Categories:     footer
 * Keywords:       footer
 * Viewport Width: 1280
 * Block Types:    core/template-part/footer
 * Post Types:     wp_template
 * Inserter:       false
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:site-logo {"width":230} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph -->
			<p><a href="mailto:info@augmentedally.com">info@augmentedally.com</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading has-small-font-size">
					<?php esc_html_e( 'About', 'augmentedally' ); ?>
				</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:navigation {"ref":118,"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading has-small-font-size">
					<?php esc_html_e( 'Quick Links', 'augmentedally' ); ?>
				</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:navigation {"ref":102,"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading has-small-font-size">
					<?php esc_html_e( 'Careers', 'augmentedally' ); ?>
				</h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:navigation {"ref":41,"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"right"} -->
			<p class="has-text-align-right">
				<?php esc_html_e( '© 2023 AugmentedAlly. All rights reserved.', 'augmentedally' ); ?>
			</p>
			<!-- /wp:paragraph -->
			<!-- wp:navigation {"ref":111,"overlayMenu":"never"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->

			<!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->

			<!-- wp:social-link {"url":"github.com","service":"github"} /-->

			<!-- wp:social-link {"url":"linkedin.com","service":"linkedin"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
