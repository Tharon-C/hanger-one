<?php /* Template Name:Tint Quote Result */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class=" pad-tb-30px page-wrapper clear" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<section class="clear">
				<h1 class="selected-name title-1 p-l pad-10px"> </h1>
				<div class="p-r col-1-3 l-full pad-10px">
					<a href="../contact/" class=" text-c btn-1 button">make an appointment now</a>
				</div>
			</section>
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
		jQuery(document).ready(function($) {
					var make = $.cookie('make');
					var model = $.cookie('model');
					console.log('style');	
					$('.selected-name').append(make + ", " + model);	

		});

		</script>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
