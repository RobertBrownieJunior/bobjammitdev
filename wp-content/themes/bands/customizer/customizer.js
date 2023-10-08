(function($) {
"use strict";
wp.customize("bands_accent_color", function(value) {
value.bind(function(to) {
$("#container a, #footer a, ul#breadcrumbs li a, #container h1, #container h2, #container h3, #container h4, #container h5, #container h6, #container h1 a, #container h2 a, #container h3 a, #container h4 a, #container h5 a, #container h6 a, pre, code, #menu .menu-toggle:hover, #menu .menu-toggle:focus").css("color", to);
$("hr, .button, button, input[type=\"submit\"]").css("background-color", to);
$("blockquote, input:focus, #search .search-field:focus, .wp-block-search__input:focus, textarea:focus, #footer .widget-container .search-field:focus, .sticky, .entry-meta .author-avatar img, #content .gallery img, #menu .current-menu-item a, #menu .current_page_parent a, .box, .box-2, .box-3, .box-4, .box-5, .box-6, .box-1-3, .box-2-3").css("border-color", to);
});
});
wp.customize("bands_header_color", function(value) {
value.bind(function(to) {
$("#container h1, #container h2, #container h3, #container h4, #container h5, #container h6, #container h1 a, #container h2 a, #container h3 a, #container h4 a, #container h5 a, #container h6 a").css("color", to);
});
});
wp.customize("bands_content_color", function(value) {
value.bind(function(to) {
$("#content p").css("color", to);
});
});
wp.customize("bands_header_font", function(value) {
value.bind(function(to) {
$("#container h1, #container h2, #container h3, #container h4, #container h5, #container h6, #container h1 a, #container h2 a, #container h3 a, #container h4 a, #container h5 a, #container h6 a").css("font-family", to);
});
});
wp.customize("bands_content_font", function(value) {
value.bind(function(to) {
$("#content p").css("font-family", to);
});
});
wp.customize("bands_link_color", function(value) {
value.bind(function(to) {
$("#container a, #footer a, ul#breadcrumbs li a").css("color", to);
});
});
})(jQuery);