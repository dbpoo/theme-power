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
    <?php
    echo do_shortcode('[smartslider3 slider=1]');
    ?>
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
      <img src="./wp-content/themes/power/images/con_1m.png" alt="">
    </div>
    <div class="btn">
      <router-link to="/solutions"></router-link>
    </div>
  </div>
  <div class="col-5">
    <div class="tit">
      <span>
        <i>新闻动态</i>
      </span>
    </div>
    <div class="more">
      <a href="./category/news/">更多新闻》</a>
    </div>
    <div class="news">
      <div class="news-c">
        <div class="newsc-img">
          <ul>
            <li><a href="javascript:;"><img src="http://www.xinnengboan.com:8080/api/wp-content/uploads/2019/05/潍柴.jpg" alt=""></a></li>
            <li class="li2"><a href="javascript:;">复牌!江山控股4.13亿元向国投电力出售湖州100兆瓦太阳能发电厂</a></li>
          </ul>
        </div>
        <div class="newsc-list">
          <div class="item">
            <dl>
              <dd class="dd1">09</dd>
              <dd class="dd2">2019-05</dd>
            </dl>
            <ul>
              <li class="li1"><a href="javascript:;">复牌!江山控股4.13亿元向国投电力出售湖州100兆瓦太阳能发电厂</a></li>
              <li class="li2">
                <p>江山控股公布，2019年4月29日，公司的间接全资附属江山永泰投资控股有限公司拟向国投电力控股股份有限公司出售 […]</p>
              </li>
            </ul>
          </div>
          <div class="item">
            <dl>
              <dd class="dd1">07</dd>
              <dd class="dd2">2019-05</dd>
            </dl>
            <ul>
              <li class="li1"><a href="javascript:;">19022千瓦宁夏下发“十三五”第二批光伏扶贫项目计划</a></li>
              <li class="li2">
                <p>日前，宁夏发改委下发了“十三五”第二批光伏扶贫项目计划，本次国家能源局、国务扶贫办下达我区1个县光伏扶贫项目， […]</p>
              </li>
            </ul>
          </div>
          <div class="item">
            <dl>
              <dd class="dd1">07</dd>
              <dd class="dd2">2019-05</dd>
            </dl>
            <ul>
              <li class="li1"><a href="javascript:;">通威太阳能PK爱旭科技三分钟对比两大PERC电池厂商核心指标</a></li>
              <li class="li2">
                <p>2018年，我国电池片产量约87.2GW，而寡头时代的特征而言更加明显：电池片产量超2GW的企业有12家，占总 […]</p>
              </li>
            </ul>
          </div>
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
        <li class="hvr-grow hvr-grow0"><img src="./wp-content/themes/power/images/card_1.jpg" alt="" srcset=""></li>
        <li class="hvr-grow hvr-grow1"><img src="./wp-content/themes/power/images/card_2.jpg" alt="" srcset=""></li>
        <li class="hvr-grow hvr-grow2"><img src="./wp-content/themes/power/images/card_3.jpg" alt="" srcset=""></li>
        <li class="hvr-grow hvr-grow3"><img src="./wp-content/themes/power/images/card_4.jpg" alt="" srcset=""></li>
        <li class="hvr-grow hvr-grow4"><img src="./wp-content/themes/power/images/card_5.jpg" alt="" srcset=""></li>
        <li class="hvr-grow hvr-grow5"><img src="./wp-content/themes/power/images/card_6.jpg" alt="" srcset=""></li>
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

      </div>
    </div>
  </div>
</div>

<?php
get_footer();
