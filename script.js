
//  $(function () {
//     var $element = $('.mainvisual');
//     function fadeInOut () {
//         $element.fadeIn(3000, function () {
//             $element.fadeOut(3000, function () {
//                 $element.fadeIn(3000, function () {
//                     setTimeout(fadeInOut,2500);
//                 });
//             });
//         });
//     }

//     fadeInOut();
//  });

//  var $element = $('.mainvisual');
//  $element.bind('cusfadeOut',function() {
//          $(this).fadeOut(3000,function() {
//                  $(this).trigger('cusfadeIn');
//          });
//  });
//  $element.bind('cusfadeIn',function() {
//          $(this).fadeIn(3000, function() {
//                  $(this).trigger('cusfadeOut');
//          });
//  });
//  $element.trigger('cusfadeOut');
// $(function() { 
//     var fadeInOut = function ($element) {
//         var $children = $element.children(),
//             current = 0,
//             time = 5000,
//             speed = '3s';
      
//         $children.css({ transition: speed })
//                  .eq(current).css({ opacity: '1' });
      
//         setInterval(function () {
//             $children.eq(current).css({ opacity: '0' });
//             current = current === $children.length - 1 ? 0 : current += 1;
//             $children.eq(current).css({ opacity: '0' });
//         }, );
//     };
//     fadeInOut($('.mainvisual picture'));
// });
$(function(){
    var $slide = $(".slide")
  .slick({
    fade: true,
    speed: 500,
    autoplaySpeed: 3000,
    arrows: false,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true
  });
})