<?php
/**
 * HEADER
 * @package CSG_-_Together_you_win
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<meta name="st:robots" content="follow, index">
<script>
window.twttr = (function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0],
t = window.twttr || {};
if (d.getElementById(id)) return t;
js = d.createElement(s);
js.id = id;
js.src = "https://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js, fjs);

t._e = [];
t.ready = function(f) {
t._e.push(f);
};

return t;
}(document, "script", "twitter-wjs"));
</script>
</head>

<body <?php body_class(); ?>>

	<?php include_once( get_template_directory() . '/template-parts/header/site-header.php' ); ?>
