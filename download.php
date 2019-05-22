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
		<div class="h2tit">
			新能链资产管理平台
		</div>
		<div class="con">资产管理方可通过高效便捷的操作，轻松安全的管理资产</div>
		<div class="btn"><a href="http://www.xinnengboan.com"></a></div>
	</div>
	<div class="download-3">
		<div class="h2tit">
			新能链资产交易平台
		</div>
		<div class="con">建立多重保护机制，保护投资人的利益</div>
		<div class="btn"><a href="javascript:;"><span></span></a></div>
	</div>
</div>

<?php
get_footer();
