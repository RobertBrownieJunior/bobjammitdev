<?php
/**
 * Title: Footer Style 2
 * Slug: variations/footer-style2
 * Description: Add a Footer Style2
 * Categories: footer
 * Keywords: footer
 * Block Types: core/template-part/footer
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"background":"#171717"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"base","layout":{"type":"constrained","contentSize":""},"fontFamily":"inter"} -->
<div class="wp-block-group has-base-color has-text-color has-background has-inter-font-family" style="background-color:#171717;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:400"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
<div class="wp-block-columns alignwide has-small-font-size" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}}},"textColor":"base","fontSize":"xxx-small"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-xxx-small-font-size"><?php printf(
	esc_html__( '© Copyright 2023 | Variations by %s', 'variations' ),
	'<a href="' . esc_url( __( 'https://tyler.com/', 'variations' ) ) . '" rel="nofollow" data-type="link" data-id="' . esc_url( __( 'https://tyler.com/', 'variations' ) ) . '">Tyler Moore</a>'
); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-left:0"><!-- wp:image {"align":"center","id":71,"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-large"><a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logos/logo-white.svg" alt="" class="wp-image-71"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->