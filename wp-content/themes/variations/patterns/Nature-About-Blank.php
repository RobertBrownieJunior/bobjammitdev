<?php
/**
 * Title: About Blank Page
 * Slug: variations/nature-about-blank
 * Description: Add an About Blank Page
 * Categories: aboutpage
 * Keywords: about, about page
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/bg.png","id":10,"dimRatio":0,"minHeight":450,"minHeightUnit":"px","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"850px","wideSize":"900px"}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:0;padding-bottom:0;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/bg.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php printf( esc_html__( '%s', 'variations' ), __( 'About', 'variations' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php printf( esc_html__( '%s', 'variations' ), __( 'Subheading: Craft a compelling subheading that sparks curiosity.', 'variations' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":9,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank/About-1.png" alt="" class="wp-image-9"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
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