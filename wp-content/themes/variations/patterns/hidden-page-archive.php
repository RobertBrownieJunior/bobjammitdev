<?php
/**
 * Title: Page Archive
 * Slug: variations/page-archive
 * Categories: features
 * Inserter: no
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:query-title {"type":"archive"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"dark","layout":{"type":"flex","flexWrap":"wrap"},"fontSize":"medium"} -->
<div class="wp-block-group has-dark-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:500"><!-- wp:post-author {"showBio":false,"byline":"by","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

<!-- wp:post-date {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"category","prefix":"Categories: ","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"<?php printf( esc_html__( '%s', 'variations' ), __( 'Read more', 'variations' ) ); ?>"} /-->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"is-style-separator-dotted"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-separator-dotted" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"},"fontSize":"xx-small"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next {"backgroundColor":"light"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->