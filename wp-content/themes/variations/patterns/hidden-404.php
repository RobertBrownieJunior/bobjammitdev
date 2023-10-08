<?php
/**
 * Title: Hidden 404
 * Slug: variations/hidden-404
 * Inserter: no
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"left","level":1,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<h1 class="wp-block-heading has-text-align-left" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><?php printf( esc_html__( '%s', 'variations' ), __( 'Page Not Found', 'variations' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"0"},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"dark"} -->
<p class="has-text-align-center has-dark-color has-text-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php printf( esc_html__( '%s', 'variations' ), __( 'Unfortunately, the page you are looking for no longer exists, or has been moved. Please try searching for your content below.', 'variations' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:search {"showLabel":false,"placeholder":"<?php printf( esc_html__( '%s', 'variations' ), __( 'Search', 'variations' ) ); ?>","width":100,"widthUnit":"%","buttonText":"<?php printf( esc_html__( '%s', 'variations' ), __( 'Search', 'variations' ) ); ?>","style":{"border":{"width":"1px"}},"borderColor":"main-dark","fontSize":"xx-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->