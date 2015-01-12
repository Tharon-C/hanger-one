<?php /* Template Name:Get Tint Quote */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class=" pad-tb-30px page-wrapper clear" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
					<?php the_content(); ?>
					
					
				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
<script>
		

		</script>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>