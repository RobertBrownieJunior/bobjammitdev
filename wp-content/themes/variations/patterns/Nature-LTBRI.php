<?php
/**
 * Title: Nature Left Text Button Right Image
 * Slug: variations/nature-libri
 * Description: Add a Left Text Button Right Image section
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
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0"><!-- wp:button {"textColor":"base","style":{"spacing":{"padding":{"left":"50px","right":"50px","top":"9px","bottom":"9px"}},"color":{"background":"#74a84a"}},"className":"is-style-fill","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-medium-font-size"><a class="wp-block-button__link has-base-color has-text-color has-background wp-element-button" style="background-color:#74a84a;padding-top:9px;padding-right:50px;padding-bottom:9px;padding-left:50px"><?php printf( esc_html__( '%s', 'variations' ), __( 'EXPLORE', 'variations' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/Our-Mission-min-1.jpg" alt="" class="wp-image-188 size-full"/></figure></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->