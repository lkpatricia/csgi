<?php
/*
 * Template Name: Industries
*/
get_header();

// Values for return user XP used in script at the bottom of this file
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $path);

$winnerHome = $uri_segments[1];
$industryChild = $uri_segments[2]; 
$page = get_page_by_path($winnerHome.'/'.$industryChild);
$pathTitle = html_entity_decode(get_the_title($page));
$pathLink = get_permalink($page);
if ( isset($_COOKIE['delayWinner'])) {
    $delayWinner = $_COOKIE['delayWinner'];
} else {
   $delayWinner = microtime(true) * 1200;
}


$depth = get_page_depth();

if ( $depth == 0 ) :

	include_once( get_template_directory() . '/template-parts/heroes/hero-full.php' );
	
elseif ( $depth == 1 ) :

	include_once( get_template_directory() . '/template-parts/heroes/hero-half.php' );
	
endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-swiftype-index="true">
	
	<?php	
	if ( $depth == 0 ) :
	
		include_once( get_template_directory() . '/template-parts/industries-parts/content-industries.php' );
		
	elseif ( $depth == 1 ) :
	
		include_once( get_template_directory() . '/template-parts/industries-parts/content-single-industry.php' );
	
	endif; 
	?>
	
</article>
 

<script>
    setTimeout(function () {
        var pathName = window.location.pathname,
            date = new Date(),
            //addHour = date.getTime() + (h*60*60*1000), // current time plus one hour to delay configuration
            addHour = date.getTime() + (1 * 60 * 1000),   // set to 1 minute delay for testing
            //addHour = date.getTime(),  // set to zero delay for testing
            splitPath = pathName.split('/');

        if ( splitPath[2] ) {
            document.cookie = "winnerIndustries=" + "<?php echo $industryChild; ?>" + "; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
            document.cookie = "winnerHome=" + "<?php echo $winnerHome; ?>" + "; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
            document.cookie = "winnerIndTitle=" + "<?php echo $pathTitle; ?>" + "; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
            document.cookie = "winnerIndLink=" + "<?php echo $pathLink; ?>" + "; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
        }
        
        if ( addHour < <?php echo json_encode($delayWinner); ?> ) {
            document.cookie = "delayWinner=" + addHour + "; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
        }
        if ( typeof userChoice === 'undefined' ) {
            document.cookie = "userChoice=enabled; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
        }    

    }, 45000);   // function is trigger after 45 seconds have elapsed
    //}, 15000);      // set to 15 seconds for testing
    
    
    jQuery(document).ready(function($) {

        $('.download-path').on('click', function (i,e) {
            var pathName = window.location.pathname,
                splitPath = pathName.split('/');

            industryChild = "<?php echo $industryChild; ?>";
            pathTitle = "<?php echo $pathTitle; ?>";
            pathLink = "<?php echo $pathLink; ?>";

            localStorage.setItem("reserveIndustries", industryChild);
            localStorage.setItem("reserveIndTitle", pathTitle);
            localStorage.setItem("reserveIndLink", pathLink);
        });
    });
    
</script>

<?php
get_footer();