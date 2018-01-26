
$(".slides").on("init", function(event, slick){
    $(".count").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
  console.log(slick.currentSlide+1);
});

$(".slides").on("afterChange", function(event, slick, currentSlide){
    $(".count").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
});
$(".page-article-item_image-slider").slick({
    slidesToShow: 1,
    arrows: true
});

$(".slides").slick({
  asNavFor: '.captions',
  infinite: false,
  speed: 0,
  arrows: false
})

$(".captions").slick({
  asNavFor: '.slides',
  infinite: false,
  speed: 0,
  fade: false,
  appendArrows: $('.pagination'),
  prevArrow: '<div class="pagination__button" style="display: inline-block;"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></div>',
  nextArrow: '<div class="pagination__button" style="display: inline-block;"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></div>'
})