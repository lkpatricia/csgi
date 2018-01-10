<?php
/*
 * Template Name: Solutions
 *
 * For use with Solutions Path
*/

get_header();

// Values for return user XP used in script at the bottom of this file 
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $path);

$winnerHome = $uri_segments[1];
$solutionChild = $uri_segments[2]; 
$page = get_page_by_path($winnerHome.'/'.$solutionChild);
$pathTitle = html_entity_decode(get_the_title($page));
$pathLink = get_permalink($page);
if ( isset($_COOKIE['delayWinner'])) {
    $delayWinner = $_COOKIE['delayWinner'];
} else {
   $delayWinner = microtime(true) * 1200;
}


$depth = get_page_depth();

if ( $depth == 0 || $depth == 1 ) :

	include_once( get_template_directory() . '/template-parts/heroes/hero-full.php' );
	
elseif ( $depth == 2 ) :

	include_once( get_template_directory() . '/template-parts/heroes/hero-half.php' );
	
elseif ( $depth == 3 ) :

	include_once( get_template_directory() . '/template-parts/heroes/hero-no-img.php' );
	
endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-swiftype-index="true">
	
	<?php
    
	if ( $depth == 0 ) :
	
		include_once( get_template_directory() . '/template-parts/solutions-parts/solutions-landing.php' );
	
	elseif ( $depth == 1 ) :
	
		include_once( get_template_directory() . '/template-parts/solutions-parts/solutions-lvl-1.php' );
		
	elseif ( $depth == 2 ) :
	
		include_once( get_template_directory() . '/template-parts/solutions-parts/solutions-lvl-2.php' );
	
	elseif ( $depth == 3 ) :
	
		include_once( get_template_directory() . '/template-parts/solutions-parts/solutions-lvl-3.php' );
	
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
            document.cookie = "winnerHome=" + "<?php echo $winnerHome; ?>" + "; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
            document.cookie = "winnerSolutions=" + "<?php echo $solutionChild; ?>" + "; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
            document.cookie = "winnerSolTitle=" + "<?php echo $pathTitle; ?>" + "; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
            document.cookie = "winnerSolLink=" + "<?php echo $pathLink; ?>" + "; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
        } 
        
        if ( addHour < <?php echo $delayWinner; ?> ) {
            document.cookie = "delayWinner=" + addHour + "; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
        }
        if ( typeof userChoice === 'undefined' ) {
            document.cookie = "userChoice=enabled; expires=Sun, 18 Jan 2037 12:00:00 UTC; path=/";
        }    
    }, 45000);   // function is trigger after 45 seconds have elapsed
    //}, 15000);      // set to 15 seconds for testing
</script>

<?php
get_template_part( 'template-parts/prefooter' );

get_footer();