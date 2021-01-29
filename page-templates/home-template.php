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
<div class="mothers-day">
    <div class="mothers-day__container">
        <div class="mothers-day__image">
            <span>What's On</span>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/food1.png" alt="Image of Food">
            <span>10.06.2020</span>
        </div> <!-- .mothers-day__image end -->
        <div class="mothers-day__info">
            <h3>Mother's Day</h3>
            <p>Join us to celebrate your mom this Mother's Day. Breakfast and lunch are pretty full, but we're still taking dinner bookings.</p>
            <a href="#" class="mothers-day__button">
                <h5>Read More</h5>
                <i class="fa fa-chevron-right"></i>
            </a>
        </div> <!-- .mothers-day__info end -->
    </div> <!-- .mothers-day__container end -->
</div> <!-- .mothers-day end -->
<div class="about">
    <span class="about__heading">
        <h2>Served Fresh</h2>
        <h2>from the paddock to the plate</h2>
    </span>
    <div class="about__info">
        <div class="about__info-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a quam ex. Nam egestas id dolor nec tincidunt.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a quam ex. Nam egestas id dolor nec tincidunt. Curabitur diam eros, mattis non erat a, tincidunt varius tellus. Maecenas eu risus iaculis magna gravida imperdiet sed tristique arcu.</p>
        </div> <!-- .about__info-container end -->
        <a href="#" class="about__button">
            <h5>Read <br> More</h5>
            <i class="fa fa-chevron-right"></i>
        </a>
    </div> <!-- .about__info end -->
</div> <!-- .about end -->

<?php
get_footer();
?>