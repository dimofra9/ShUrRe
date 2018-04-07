<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShUrRe
 */

get_header(); ?>

<div class="content-container container">
    <div class="section">

      <div class="row">
        <div id="primary" class="col l8 s12">
		<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
		<div id="secondary" class="col l4 s12">
			<?php get_sidebar( 'page' ); ?>
		</div>
      </div>

    </div>
</div>
  
<?php get_footer();