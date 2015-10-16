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
			
		
			
			
			<?php /* The Always Show Loop */ ?>
			<?php query_posts('category_name=alwaysShow'); ?>
			
		
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="important" id="alwaysShow">
					<h2> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
					<?php the_title(); ?>
					</a> </h2>
					
					<div class="content-wrapper">
						
				    <div class="text-left"> <?php the_content(); ?> </div>
					
					<div class="text-right"><img src="<?php echo get_template_directory_uri()."/assets/imgs/wolf.jpg"; ?> "> </div>
					
					
				    
					</div>
					
				</div>

			<?php endwhile; ?>
			
		
			
			<?php ///* Start the Second Loop */ ?>
			
		
			<?php //while ( have_posts() ) : the_post(); ?>
				
				
				
				<?php //get_template_part( 'template-parts/content', 'myTemp' ); ?>
				
			<?php// endwhile; ?>

			
			
			

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php// get_sidebar(); ?>
<?php //get_footer(); ?>

<?php createbox(1); ?>