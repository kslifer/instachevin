<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package InstaChevin
 */

get_header(); ?>

<div id="primary" class="content-area">
		
		<?php if ( have_posts() ) : ?>

				<h1 class="archive-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'instachevin' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'instachevin' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'instachevin' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'instachevin' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'instachevin' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'instachevin' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'instachevin' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'instachevin');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'instachevin');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'instachevin' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'instachevin' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'instachevin' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'instachevin' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'instachevin' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'instachevin' );

						else :
							_e( 'Archives', 'instachevin' );

						endif;
					?>
				</h1>
			
		<main id="main" class="site-main" role="main">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->
	
	<?php instachevin_paging_nav(); ?>

</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
