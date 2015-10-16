<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme_Two
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			
		
			
			<?php //The Quarter Post ?>
			<?php query_post('category_name=Quarter'); ?>
			
			<?php /* Start the Loop */ ?>
			
		
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php $do_not_duplicate = $post->ID;?> 
				<div class="don_class">
					
					$do_not_duplicate = $post->ID; 
					
				</div>
				
				

			<?php endwhile; ?>
			
			<?php //The Quarter Post ?>
			<?php query_post('category_name=Quarter'); ?>
			
			<?php /* Start the Loop */ ?>
			
		
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php $do_not_duplicate = $post->ID;?> 
				<div class="don_class">
					
					$do_not_duplicate = $post->ID; 
					
				</div>
				
				

			<?php endwhile; ?>
			
			
			
			<?php /* Start the Second Loop */ ?>
			
		
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php if ($post->ID == $do_not_duplicate) continue;?>
				
				<?php get_template_part( 'template-parts/content', 'myTemp' ); ?>
				
			<?php endwhile; ?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php createTextbox(); ?>