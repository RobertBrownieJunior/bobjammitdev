<?php
/**
 * Title: Home Blank Page
 * Slug: variations/nature-home-blank
 * Description: Add a Home Blank Page
 * Categories: homepage
 * Keywords: home, home page, homepage
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/bg.png","id":10,"dimRatio":0,"minHeight":33,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="min-height:33vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/bg.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"125px"} -->
<div style="height:125px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php printf( esc_html__( '%s', 'variations' ), __( 'Add a Subheading POTENTIAL', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php printf( esc_html__( '%s', 'variations' ), __( 'H1 Heading', 'variations' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"2.75rem"}}}} -->
<p class="has-text-align-center" style="margin-bottom:2.75rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Create a compelling and attention-grabbing short description<br>that sparks curiosity and leaves readers intrigued.', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"spacing":{"padding":{"left":"30px","right":"30px","top":"15px","bottom":"15px"}},"typography":{"lineHeight":"1"}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size" style="line-height:1"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button" style="padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px"><?php echo esc_html_x( 'CTA Button', 'sample content for call to action button', 'variations' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
<!-- wp:cover {"dimRatio":0,"overlayColor":"custom-color-1","isDark":false,"align":"full","textColor":"custom-color-1","layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-cover alignfull is-light has-custom-color-1-color has-text-color"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"textColor":"custom-color-1"} -->
<h2 class="wp-block-heading has-text-align-center has-custom-color-1-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><?php printf( esc_html__( '%s', 'variations' ), __( 'Services Heading', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":11,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/service.png" alt="" class="wp-image-11"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"1.75rem"}}}} -->
<h4 class="wp-block-heading" style="margin-top:1.75rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'First Service', 'variations' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1.75rem"}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color" style="margin-bottom:1.75rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Craft a brief description outlining the essence of your first service.', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textColor":"contrast","style":{"border":{"bottom":{"width":"2px"},"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|base"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0px","right":"0px","top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"}},"className":"is-style-outline","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size" style="font-style:normal;font-weight:500;line-height:1.5"><a class="wp-block-button__link has-contrast-color has-text-color wp-element-button" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--base);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><?php echo esc_html_x( 'CTA Button', 'sample content for call to action button', 'variations' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":11,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/service.png" alt="" class="wp-image-11"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"1.75rem"}}}} -->
<h4 class="wp-block-heading" style="margin-top:1.75rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'First Service', 'variations' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1.75rem"}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color" style="margin-bottom:1.75rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Craft a brief description outlining the essence of your first service.', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textColor":"contrast","style":{"border":{"bottom":{"width":"2px"},"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|base"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0px","right":"0px","top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-outline","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-contrast-color has-text-color wp-element-button" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--base);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><?php echo esc_html_x( 'CTA Button', 'sample content for call to action button', 'variations' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:image {"id":11,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/service.png" alt="" class="wp-image-11"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"1.75rem"}}}} -->
<h4 class="wp-block-heading" style="margin-top:1.75rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'First Service', 'variations' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1.75rem"}}},"textColor":"contrast"} -->
<p class="has-contrast-color has-text-color" style="margin-bottom:1.75rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Craft a brief description outlining the essence of your first service.', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"contrast","style":{"border":{"bottom":{"width":"2px"},"top":{"width":"0px","style":"none"},"right":{"color":"var:preset|color|base"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"left":"0px","right":"0px","top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-outline","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-contrast-color has-text-color wp-element-button" style="border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--base);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><?php echo esc_html_x( 'CTA Button', 'sample content for call to action button', 'variations' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/bg.png","id":10,"dimRatio":0,"minHeight":500,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"850px","wideSize":"900px"}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:0;padding-bottom:0;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/bg.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"35px","lineHeight":"1.3"},"spacing":{"margin":{"bottom":"1.75rem"}}}} -->
<p class="has-text-align-center" style="margin-bottom:1.75rem;font-size:35px;line-height:1.3"><?php printf( esc_html__( '%s', 'variations' ), __( '"A comprehensive testimonial will be thoughtfully placed here, complete with all the compelling details and thoughtful insights."', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":72,"width":80,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/photo-image.png" alt="" class="wp-image-72" style="width:80px" width="80"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"16px","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-align-center" style="margin-top:16px;margin-bottom:0;font-style:normal;font-weight:300"><?php printf( esc_html__( '%s', 'variations' ), __( 'Full Name', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-align-center" style="margin-top:0;margin-bottom:0;font-size:14px;font-style:normal;font-weight:300"><?php printf( esc_html__( '%s', 'variations' ), __( 'Job Title', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php printf( esc_html__( '%s', 'variations' ), __( 'About Heading', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"2.75rem"}}}} -->
<p style="margin-bottom:2.75rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'About Text: In this section, you can provide a detailed paragraph that delves into the history, values, and mission of your web development business. Highlight your team’s expertise, unique approach, and the commitment that sets you apart. Emphasize your passion for creating exceptional web solutions and convey your dedication to delivering remarkable results for clients.', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"spacing":{"padding":{"left":"30px","right":"30px","top":"15px","bottom":"15px"}},"typography":{"lineHeight":"1"}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size" style="line-height:1"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button" style="padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px"><?php echo esc_html_x( 'CTA Button', 'sample content for call to action button', 'variations' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:image {"id":9,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/About-1.png" alt="" class="wp-image-9"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/bg.png","id":10,"dimRatio":0,"minHeight":450,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:0;margin-bottom:0;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/bg.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php printf( esc_html__( '%s', 'variations' ), __( 'Talk To Us Heading', 'variations' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"2.75rem"}}}} -->
<p class="has-text-align-center" style="margin-bottom:2.75rem"><?php printf( esc_html__( '%s', 'variations' ), __( 'Text: In this section, you can compose a friendly and informative paragraph that encourages visitors to engage with your business.', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"spacing":{"padding":{"left":"30px","right":"30px","top":"15px","bottom":"15px"}},"typography":{"lineHeight":"1"}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size" style="line-height:1"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button" style="padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px"><?php echo esc_html_x( 'CTA Button', 'sample content for call to action button', 'variations' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->