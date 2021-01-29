<?php
/**
 * Template Name: Home Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="welcome">
    <span class="welcome__heading">
        <h2>Welcome to</h2>
        <h2>The Backbeach Eating House</h2>
    </span> <!-- .welcome__heading end -->
    <hr>
    <div class="welcome__info">
        <div class="welcome__info-container">
            <p>There's only one place like the Backbeach Cafe &amp; Restaurant, located off the  beaches of San Diego, California with uninterrupted views of crip white sand and the pacific ocean. The perfect place to eat, relax and enjoy.</p>
            <p>We are proud to support local business and local producers by sourcing as much as possible locally, inluding the fish, beef and chicken. As well as the coffee and wines.</p>
        </div> <!-- .welcome__info-container end -->
        <a href="#" class="welcome__info-button">
            <h5>Read <br> More</h5>
            <i class="fa fa-chevron-right"></i>
        </a>
    </div> <!-- .welcome__info end -->
</div> <!-- .welcome end -->

<?php
get_footer();
?>