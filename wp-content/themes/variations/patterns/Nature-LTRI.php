<?php
/**
 * Title: Nature Left Text Right Image
 * Slug: variations/nature-ltri
 * Description: Add a Left Text Right Image section
 * Categories: featured
 * Keywords: image, text
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","wideSize":"1150px","contentSize":"1150px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:media-text {"align":"wide","mediaPosition":"right","mediaId":188,"mediaType":"image","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"},"margin":{"right":"0","left":"0"}}}} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile" style="margin-right:0;margin-left:0;padding-right:0;padding-left:0"><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"0","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"0.6rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:heading {"textAlign":"left","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-x-large-font-size"><?php printf( esc_html__( '%s', 'variations' ), __( 'ABOUT US', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php printf( esc_html__( '%s', 'variations' ), __( 'I made it so it is super easy to update and so that it flows perfectly with my tutorials. Lots of love and hundreds of hours went into making it. I hope you love it as much as I do. I wish you the best of luck with your business, enjoy the adventure.', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/Our-Mission-min-1.jpg" alt="" class="wp-image-188 size-full"/></figure></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->