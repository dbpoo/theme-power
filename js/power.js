$(function() {
  // 首页轮播
  var bannerSwiper = new Swiper ('.bannerSwiper', {
    loop: true,
    autoplay: true,
    pagination: {
      el: '.swiper-pagination',
    },
  })   

  // 首页-地图
  $(".light").click(function() {
    $(".light")
      .children(".sp2")
      .removeClass("on");
    $(this)
      .children(".sp2")
      .addClass("on");
  });

  $(".download-btn a").click(function() {
    alert('暂未开放，敬请期待！')
  });

  $('.swith-on').click(function() {
    $('.swith-on').hide();
    $('.swith-off').show();
    $('.nav-menu').show();
  })

  $('.swith-off').click(function() {
    $('.swith-on').show();
    $('.swith-off').hide();
    $('.nav-menu').hide();
  })
});
