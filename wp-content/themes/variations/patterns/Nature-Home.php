<?php
/**
 * Title: Nature Home Page
 * Slug: variations/nature-homepage
 * Description: Add a Home Page template
 * Categories: homepage
 * Keywords: home, home page, homepage
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banners/Banner.jpg","id":129,"dimRatio":0,"overlayColor":"contrast","focalPoint":{"x":0.5,"y":0},"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full","layout":{"type":"constrained","contentSize":"px"}} -->
<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-129" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banners/Banner.jpg" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"125px"} -->
<div style="height:125px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"6rem","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#2c541d"}}} -->
<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#2c541d;font-size:6rem;font-style:normal;font-weight:500"><?php printf( esc_html__( '%s', 'variations' ), __( 'EARTH', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"200","letterSpacing":"0.3rem"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:200;letter-spacing:0.3rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'ENDLESS POTENTIAL', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"0"}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:button {"textColor":"base","style":{"spacing":{"padding":{"left":"50px","right":"50px","top":"9px","bottom":"9px"}},"color":{"background":"#74a84a"}},"className":"is-style-fill","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-medium-font-size"><a class="wp-block-button__link has-base-color has-text-color has-background wp-element-button" style="background-color:#74a84a;padding-top:9px;padding-right:50px;padding-bottom:9px;padding-left:50px"><?php printf( esc_html__( '%s', 'variations' ), __( 'EXPLORE', 'variations' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"231px"} -->
<div style="height:231px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","wideSize":"1140px"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"id":174,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/Service-1-min.jpg" alt="" class="wp-image-174" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4} -->
<h4 class="wp-block-heading has-text-align-left"><?php printf( esc_html__( '%s', 'variations' ), __( 'Web Design', 'variations' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php printf( esc_html__( '%s', 'variations' ), __( 'Custom web design for small businesses, we help you capture new audiences and increase your sales.', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"id":175,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/Service-2-min.jpg" alt="" class="wp-image-175" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4} -->
<h4 class="wp-block-heading has-text-align-left"><?php printf( esc_html__( '%s', 'variations' ), __( 'Graphic Design', 'variations' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php printf( esc_html__( '%s', 'variations' ), __( 'Logos, merchandise and more. Anyone can create nice graphics. We think it’s better to create memorable ones.', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"id":176,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/services/Service-3-min.jpg" alt="" class="wp-image-176" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":4} -->
<h4 class="wp-block-heading has-text-align-left"><?php printf( esc_html__( '%s', 'variations' ), __( 'Content Creation', 'variations' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php printf( esc_html__( '%s', 'variations' ), __( 'Want to attract people to your website?&nbsp; You have to have the best content in the world. That’s what we do.', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

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

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/call-to-action/Call-to-action.jpg","id":198,"dimRatio":0,"isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-198" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/call-to-action/Call-to-action.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#2c541d"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-color has-x-large-font-size" style="color:#2c541d;font-style:normal;font-weight:500"><?php printf( esc_html__( '%s', 'variations' ), __( 'Talk To Us', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php printf( esc_html__( '%s', 'variations' ), __( 'Have any questions? We are always open to talk about your business, new projects, creative opportunities and how we can help you.', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"base","style":{"spacing":{"padding":{"left":"50px","right":"50px","top":"9px","bottom":"9px"}},"color":{"background":"#74a84a"}},"className":"is-style-fill","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-medium-font-size"><a class="wp-block-button__link has-base-color has-text-color has-background wp-element-button" style="background-color:#74a84a;padding-top:9px;padding-right:50px;padding-bottom:9px;padding-left:50px"><?php printf( esc_html__( '%s', 'variations' ), __( 'Get In Touch', 'variations' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->