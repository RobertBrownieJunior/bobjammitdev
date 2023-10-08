<?php
/**
 * Title: Default Footer
 * Slug: variations/footer-default
 * Description: Add a Default Footer
 * Categories: footer
 * Keywords: footer
 * Block Types: core/template-part/footer
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<div class="wp-block-columns alignwide has-small-font-size" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"ref":4,"textColor":"contrast","overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-left:0"><!-- wp:site-logo {"width":102,"align":"center"} /-->

<!-- wp:site-title {"level":4,"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","fontSize":"xxx-small"} -->
<p class="has-text-align-center has-xxx-small-font-size"><?php printf(
	esc_html__( '© Copyright 2023 | Variations by %s', 'variations' ),
	'<a href="' . esc_url( __( 'https://tyler.com/', 'variations' ) ) . '" rel="nofollow" data-type="link" data-id="' . esc_url( __( 'https://tyler.com/', 'variations' ) ) . '">Tyler Moore</a>'
); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->