<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShUrRe
 */

?>

<footer class="page-footer">
    <?php get_sidebar( 'footer' ); ?>
    
	<div class="footer-copyright">
		<div class="container center">
			<?php do_action( 'elemate_footer_elements' ); ?>
		</div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
