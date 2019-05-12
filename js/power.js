$(function() {
  // 首页 - 顶部轮播
  var bannerSwiper = new Swiper(".bannerSwiper", {
    loop: true,
    autoplay: true,
    pagination: {
      el: ".swiper-pagination"
    }
  });

   // 首页移动 - 顶部轮播
   var bannerSwiperM = new Swiper(".bannerSwiperM", {
    loop: true,
    autoplay: true,
    pagination: {
      el: ".swiper-paginationM"
    }
  });

  // 首页 - 活动轮播
  var eventSwiper = new Swiper(".eventSwiper", {
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 200,
      modifier: 1,
      slideShadows: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  // 新能研究院 - 活动轮播
  var schoolSwiper = new Swiper(".schoolSwiper", {
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 200,
      modifier: 1,
      slideShadows: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

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
    alert("暂未开放，敬请期待！");
  });

  $(".swith-on").click(function() {
    $(".swith-on").hide();
    $(".swith-off").show();
    $(".nav-menu").show();
  });

  $(".swith-off").click(function() {
    $(".swith-on").show();
    $(".swith-off").hide();
    $(".nav-menu").hide();
  });
});
