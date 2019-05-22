<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<div class="list-wrapper">
	<div class="banner">
		<h2>新闻动态</h2>
	</div>
	<div class="list">
		<div class="tit">
			<span>
				<i class="list-tab">
					<a href="?tag=新能动态" class="<?php echo single_tag_title('', false) == '新能动态' ? 'on' : '' ?>">新能动态</a>
					<a href="?tag=行业资讯" class="<?php echo single_tag_title('', false) == '行业资讯' ? 'on' : '' ?>">行业资讯</a>
				</i>
			</span>
		</div>
		<?php if (have_posts()) : ?>
			<?php
			// Start the Loop.
			while (have_posts()) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part('template-parts/content/content', 'excerpt');

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			wp_pagenavi();

		// If no content, include the "No posts found" template.
		else :
			get_template_part('template-parts/content/content', 'none');

		endif;
		?>

	</div>
</div>

<?php
get_footer();
