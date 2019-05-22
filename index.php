<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themess/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<div class="home">
  <div class="banner-swiper">
    <div class="swiper-container bannerSwiper">
      <?php echo do_shortcode('[metaslider id="73"]'); ?>
      <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-container bannerSwiperM">
      <?php echo do_shortcode('[metaslider id="101"]'); ?>
      <div class="swiper-pagination swiper-paginationM"></div>
    </div>

    <div class="banner-btn">
      <a href="javascript:;" class="btn-1 hvr-grow"></a>
      <a href="javascript:;" class="btn-2 hvr-grow"></a>
      <a href="javascript:;" class="btn-3 hvr-grow"></a>
    </div>
    <div class="banner-btn-m">
      <div>
        <a href="javascript:;" class="btn-1 hvr-grow"></a>
      </div>
      <div>
        <a href="javascript:;" class="btn-2 hvr-grow"></a>
        <a href="javascript:;" class="btn-3 hvr-grow"></a>
      </div>
    </div>
  </div>

  <div class="col-1">
    <div class="tit">
      <span>
        <i>新能源资产价值流通服务</i>
      </span>
    </div>
    <div class="con">
      <div class="point point-1"></div>
      <div class="point point-2"></div>
      <div class="point point-3"></div>
      <div class="point point-4"></div>
    </div>
    <div class="conm">
      <img src="<?php bloginfo('template_url') ?>/images/con_1m.png" alt="">
    </div>
    <div class="btn">
      <a href="./solutions"></a>
    </div>
  </div>
  <div class="col-5">
    <div class="tit">
      <span>
        <i>新闻动态</i>
      </span>
    </div>
    <div class="more">
      <a href="./?cat=1">更多新闻》</a>
    </div>
    <div class="news">
      <div class="news-c">
        <div class="newsc-img">
          <ul>
            <?php
            $sticky = get_option('sticky_posts');
            $args = array(
              'posts_per_page' => 1,
              'post__in'  => $sticky,
              'ignore_sticky_posts' => 1
            );
            $query = new WP_Query($args);
            if (isset($sticky[0])) {
              ?>
              <li><?php twentynineteen_post_thumbnail(); ?></li>
              <li class="li2"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
            <?php
          }
          ?>
          </ul>
        </div>
        <div class="newsc-list">
          <?php
          $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 3, // Number of recent posts thumbnails to display
            'post_status' => 'publish' // Show only the published posts
          ));
          foreach ($recent_posts as $post) {
            echo '<div class="item"><dl><dd class="dd1">' . date('d', strtotime($post["post_date"])) . '</dd><dd class="dd2">' . date('Y-m', strtotime($post["post_date"])) . '</dd></dl><ul><li class="li1"><a href="' . get_permalink($post["ID"]) . '">' . esc_html($post["post_title"]) . '</a></li><li class="li2">' . wp_trim_words($post["post_content"], 50) . '</li></ul></div>';
          }
          wp_reset_query();
          ?>
        </div>
      </div>
    </div>
    <div class="morem">
      <a href=""></a>
    </div>
  </div>
  <div class="col-2">
    <div class="tit">
      <span>
        <i>“阳光照见爱”我们在行动</i>
      </span>
    </div>
    <div class="con">
      <a class="light light-100"><span class="sp1"></span><span class="sp2 on"></span></a>
      <a class="light light-60"><span class="sp1"></span><span class="sp2"></span></a>
      <a class="light light-150"><span class="sp1"></span><span class="sp2"></span></a>
      <a class="light light-75"><span class="sp1"></span><span class="sp2"></span></a>
      <a class="light light-120"><span class="sp1"></span><span class="sp2"></span></a>
    </div>
  </div>
  <div class="col-3">
    <div class="tit">
      <span>
        <i>项目展示</i>
      </span>
    </div>
    <div class="con">
      <ul>
        <li class="hvr-grow hvr-grow0"><img src="<?php bloginfo('template_url') ?>/images/card_1.jpg" alt="" srcset=""></li>
        <li class="hvr-grow hvr-grow1"><img src="<?php bloginfo('template_url') ?>/images/card_2.jpg" alt="" srcset=""></li>
        <li class="hvr-grow hvr-grow2"><img src="<?php bloginfo('template_url') ?>/images/card_3.jpg" alt="" srcset=""></li>
        <li class="hvr-grow hvr-grow3"><img src="<?php bloginfo('template_url') ?>/images/card_4.jpg" alt="" srcset=""></li>
        <li class="hvr-grow hvr-grow4"><img src="<?php bloginfo('template_url') ?>/images/card_5.jpg" alt="" srcset=""></li>
        <li class="hvr-grow hvr-grow5"><img src="<?php bloginfo('template_url') ?>/images/card_6.jpg" alt="" srcset=""></li>
      </ul>
    </div>
    <div class="btn" style="display:none;">
      <a></a>
    </div>
  </div>
  <div class="col-4">
    <div class="tit">
      <span>
        <i>活动信息</i>
      </span>
    </div>
    <div class="event">
      <div class="event-c">
        <div class="swiper-container eventSwiper">
          <?php echo do_shortcode('[metaslider id="85"]'); ?>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
