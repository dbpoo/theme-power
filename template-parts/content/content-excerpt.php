<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<div class="item">
	<div class="item-img">
		<?php twentynineteen_post_thumbnail(); ?>
	</div>
	<ul>
		<li class="li1">
				<?php
				the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
				?>
			<p><?php the_excerpt(); ?></p>
		</li>
		<li class="li2"><?php the_date_xml(); ?></li>
	</ul>
	<span class="arrow"></span>
</div>