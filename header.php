<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Caladea:wght@400;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<div class="top-header">

	<div class="mobile-nav">
		<a href="#" class="mobile-nav__phone">
			<i class="fa fa-phone"></i>980-622-1490
		</a>
		<a href="#" class="mobile-nav__menu">
			Menu<i class="fa fa-bars"></i>
		</a>
		<div class="mobile-nav__dropdown">
			<ul class="mobile-nav__list">
				<li class="mobile-nav__listItem">
					<a href="#">Home</a>
				</li>
				<li class="mobile-nav__listItem">
					<a href="#">Dining</a>
				</li>
				<li class="mobile-nav__listItem">
					<a href="#">Lunch</a>
				</li>
				<li class="mobile-nav__listItem">
					<a href="#">Breakfast</a>
				</li>
				<li class="mobile-nav__listItem">
					<a href="#">Reservations</a>
				</li>
				<li class="mobile-nav__listItem">
					<a href="#">About</a>
				</li>
				<li class="mobile-nav__listItem">
					<a href="#">Contact</a>
				</li>
			</ul>
		</div> <!-- .mobile-nav__dropdown -->
	</div> <!-- .mobile-nav end --> 

	<a href="#" class="top-header__logo">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/backbeach-logo.png" alt="Site Logo">
	</a> <!-- .top-header__logo end -->

	<div class="top-header__main">

		<div class="top-header__main-info">
			<span><i class="fa fa-phone"></i>980-622-1490</span>
			<span><i class="fa fa-map"></i>Lot 757, Ocean Drive, Bunbury</span>
		</div> <!-- .top-header__main-info end -->

		<h3>Make a Reservation</h3>

	</div> <!-- .top-header__main end -->

	<ul class="top-header__social-list">
		<li class="top-header__social-listItem">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png" alt="Social Icon">
		</li>
		<li class="top-header__social-listItem">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram.png" alt="Social Icon">
		</li>
		<li class="top-header__social-listItem">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.png" alt="Social Icon">
		</li>
	</ul> <!-- .top-header__social-list end -->

</div> <!-- .top-header end  -->

<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">
	<div class="container">
		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>
	</div><!-- .container -->
</nav><!-- .site-navigation -->

<div class="bottom-header">
	<div class="bottom-header__banner">

		<h2>A Dining Experience</h2>

	</div> 

	<div class="bottom-header__info">

		<ul class="bottom-header__list">
			<li class="bottom-header__listItem">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/food1.png" alt="Image of Food">
				<span>Dining Menu</span>
			</li>
			<li class="bottom-header__listItem">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/food1.png" alt="Image of Food">
				<span>Lunch Menu</span>
			</li>
			<li class="bottom-header__listItem">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/food1.png" alt="Image of Food">
				<span>Functions</span>
			</li>
		</ul> <!-- .bottom-header__list end -->

	</div> <!-- .bottom-header__info end -->

</div> <!-- .bottom-header__end -->