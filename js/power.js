$(function() {
  $('.light').click(function(){
    $('.light').children('.sp2').removeClass('on');
    $(this).children('.sp2').addClass('on');
  })
})