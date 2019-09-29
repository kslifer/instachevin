<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package InstaChevin
 */

get_header(); ?>
	
<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">
			
			<div class="entry-content">

				<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'instachevin' ); ?></h1>

				<!-- KMS <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'instachevin' ); ?></p>

				<?php get_search_form(); ?> KMS -->

			</div><!-- .entry-content -->

		</main><!-- #main -->
		
	</div><!-- #primary -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>