<?php
/**
 * Title: Posts Grid
 * Slug: variations/posts-grid
 * Description: Add posts grid
 * Categories: posts
 * Keywords: blog, news, posts, grid
 * Block Types: core/query
 */

?>
<!-- wp:query {"queryId":1,"query":{"perPage":4,"pages":"0","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"align":"full"} -->
<div class="wp-block-query alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"className":"variations-posts-grid","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide variations-posts-grid" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"height":"230px","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"600","lineHeight":1.3},"spacing":{"padding":{"bottom":"var:preset|spacing|30"},"margin":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"textColor":"main","fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"dark"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":10,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-style-excerpt-truncate-3","fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","textColor":"dark","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->