<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShUrRe
 */

get_header();
?>
<div id="primary" class="content-area site-nav">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			?>

			<div class="row">

			<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				?>

				<div class="card-panel col s4">

				<?php
				get_template_part( 'template-parts/content', get_post_type() );
				?>
				</div>
				<?php
			endwhile;
			?>
			</div>
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<div id="primary" class="content-area site-nav">
	<main id="main" class="site-main">	
		<!--titulo publicaciones-->
		<div class="card blue">
			<div class="card-content" >
				<h4 class="white-text"><?php get_template_part( 'template-parts/content', 'page' ); ?></h4>
			</div>                                
		</div>
		<!--ultimas publicaciones-->
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			?>

			<div class="row">

			<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
				?>

				<div class="card-panel col s4">

				<?php
				get_template_part( 'template-parts/content', get_post_type() );
				?>
				</div>
				<?php
			endwhile;
			?>
			</div>
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>					
	</main><!-- #main -->
</div><!-- #primary -->

<!--contenido-->
            <div class="row">
                <div class="col s12">
                    <div class="card">                        
                        <div class="card-content">
                            <!--titulo publicaciones-->
                            <div class="card blue">
                                <div class="card-content" >
                                    <h4 class="white-text"><i class="material-icons left">account_circle</i>Listado de recetas por categoría platos</h4>
                                </div>                                
                            </div>
                            <!--ultimas publicaciones-->                            
                            <div class="row ">
                                <div class="col s4">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="images/wok con camarones.jpg">                                            
                                        </div>
                                        <div class="card-content">
                                            <h5>WOK con camarones</h5>
                                            <p>
                                                Saltear es rápido, por lo que limita la pérdida de nutrientes; se logra una comida rápida y muy sana también,
                                                y para qué negarlo, solo ensuciamos el wok y nada más. Camarones frescos, verduras tiernas pero crujientes,
                                                una chorrito de soja y el picante del jengibre hacen que este salteado salga buenísimo.
                                            </p>
                                            <br>
                                        <!--chips-->
                                        <div class="chip">
                                            <i class="material-icons left">account_circle</i>
                                            Cena
                                        </div>
                                        <div class="chip">
                                            <i class="material-icons left">label</i>
                                            Almuerzo
                                        </div>
                                        <div class="chip">
                                            <i class="material-icons left">language</i>
                                            Japón
                                        </div>
                                        </div>
                                        <!--enlace card-->
                                        <div class="card-action">
                                            <a href="html/wok_con_camarones.html">IR A LA RECETA</a>
                                        </div>
                                    </div>
                                </div>                  
							</div>
							
                        </div>                        
                    </div>
                </div>
            </div>
	

<?php

get_footer();