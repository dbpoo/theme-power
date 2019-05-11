<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<div class="nav-flex">
	<?php if (has_custom_logo()) : ?>
		<div class="nav-logo">
			<?php the_custom_logo(); ?>
		</div>
	<?php endif; ?>

	<div class="nav-swith">
		<span class="swith-icon swith-on"></span>
		<span class="swith-icon swith-off" style="display:none;"></span>
	</div>
	<div class="nav-menu" style="display:none;">
		<?php if (has_nav_menu('menu-1')) : ?>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?>
		<?php endif; ?>
	</div>
</div>