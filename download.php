<?php
/*
 * Template Name: download
 */
get_header();
?>

<div class="download-wrapper">
	<div class="banner">
		<h2>
			新能源资产上链、发行、清结算
			<br>系统解决方案提供商
		</h2>
		<div class="download-btn">
			<a href="javascript:;" @click="toast"></a>
		</div>
	</div>
	<div class="download-1">
		<div class="tit">
			<span>
				<i>平台介绍</i>
			</span>
		</div>
		<div class="con">
			<?php if (have_posts()) :  the_post();
				the_content();
			endif; ?>
		</div>
	</div>
	<div class="download-2">
		<div class="tit">
			<span>
				<i>多终端访问</i>
			</span>
		</div>
		<div class="type">
			<div class="client">
				<a href="javascript:;" class="icon-ios" @click="gohome">
					<i>
						<img src="<?php bloginfo('template_url') ?>/images/icon_iphone.png" alt>
					</i>
					iPhone访问
					<span></span>
				</a>
				<a href="javascript:;" class="icon-android" @click="gohome">
					<i>
						<img src="<?php bloginfo('template_url') ?>/images/icon_android.png" alt>
					</i>
					Android访问
					<span></span>
				</a>
				<a href="javascript:;" class="icon-window" @click="toast">
					<i>
						<img src="<?php bloginfo('template_url') ?>/images/icon_window.png" alt class="iconup">
						<img src="<?php bloginfo('template_url') ?>/images/icon_download.png" alt class="icondown">
					</i>Windows访问
				</a>
				<a href="javascript:;" class="icon-macos" @click="toast">
					<i>
						<img src="<?php bloginfo('template_url') ?>/images/icon_iphone.png" alt class="iconup">
						<img src="<?php bloginfo('template_url') ?>/images/icon_download.png" alt class="icondown">
					</i>Mac OS访问
				</a>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
