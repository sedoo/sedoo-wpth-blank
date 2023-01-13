<?php
/**
 * The template for displaying all posts/page
 *
 * @package Blank Canvas
 * @since 1.0.0
 */

get_header();
?>
<main id="main" class="site-main" role="main">
	<?php
	while ( have_posts() ) :
		the_post();

		the_content();
		
	endwhile;
	?>
</main>

<?php
get_footer();
