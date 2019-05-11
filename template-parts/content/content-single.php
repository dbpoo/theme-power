<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<div class="news-nav">
	<?php get_template_part('template-parts/header/entry', 'header'); ?>
</div>
<div class="news-tit">
	<?php
	the_title();
	?>
</div>
<div class="news-con">
	<?php
	the_content(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen'),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		)
	);
	?>
</div>