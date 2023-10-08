<?php
/**
 * Title: Header Sticky
 * Slug: variations/header-sticky
 * Description: Header with site title and navigation
 * Categories: header
 * Keywords: header, nav, site logo
 * Block Types: core/template-part/header
 */

?>
<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->