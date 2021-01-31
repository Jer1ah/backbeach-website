<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php wp_footer(); ?>

<footer class="footer">
    <div class="footer__container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/backbeach-logo.png" alt="Site Logo">
        <a href="#" class="arrow-up">
            <i class="fa fa-chevron-up"></i>
            <p>Back to Top</p>
        </a>
        <h5>&copy;2020 Jeriah Bowers</h5>
</div> <!-- .footer__container end -->
</footer>

</body>
</html>

