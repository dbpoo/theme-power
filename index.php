<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<section id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php
		echo do_shortcode('[smartslider3 slider=1]');
		?>
		<div class="col-server">
			<div class="tit">新能源资产价值流通服务</div>
			<div class="con">
				<div class="point point-1"></div>
				<div class="point point-2"></div>
				<div class="point point-3"></div>
				<div class="point point-4"></div>
			</div>
			<div class="btn">
				<router-link to="/solutions"></router-link>
			</div>
		</div>
		<div class="col-map">
			<div class="tit">“阳光照见爱”我们在行动</div>
			<div class="con">
				<a class="light" :class="'light-' + item" v-for="(item, index) in lightArr" :key="index">
					<span class="sp1"></span>
					<span class="sp2"></span>
				</a>
			</div>
			<div class="con-mobile">
				<span class="light" :class="'light-' + item" v-for="(item, index) in lightArr" :key="index"></span>
			</div>
		</div>
		<div class="col-project">
			<div class="tit">项目展示</div>
			<div class="con">

			</div>
		</div>
		<div class="col-4">
			<div class="tit">活动信息</div>
			<div class="event">
				<div class="event-c">

				</div>
			</div>
		</div>
	</main><!-- .site-main -->
</section><!-- .content-area -->

<?php
get_footer();
