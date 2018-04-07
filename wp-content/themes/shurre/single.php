<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ShUrRe
 */

get_header(); ?>

<div class="container">
    <div class="section">

      <div class="row">
        <div id="primary" class="col l8 s12">
		<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'content/content', get_post_format() );
				
					the_post_navigation( array(
						'prev_text' => '<span class="nav-subtitle">' . __( 'Previous Post', 'elemate' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . __( 'Next Post', 'elemate' ) . '</span> <span class="nav-title">%title</span>',
					) );
					
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

				endwhile; // End of the loop.
				?>
		</div>
		<div id="secondary" class="col l4 s12">
		    <?php get_sidebar(); ?>
		</div>
      </div>

    </div>
</div>
  
<?php get_footer();