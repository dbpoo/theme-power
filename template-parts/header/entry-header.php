<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<?php if (!is_page()) : ?>
	<span>
		新闻资讯 &gt;
		<i>详情</i>
	</span>
	<span><?php twentynineteen_posted_on(); ?></span>
<?php endif; ?>