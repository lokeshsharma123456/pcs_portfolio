$(document).ready(function() {
    $('.scroll-right').click(function() {
        $('.product-items-container').animate({scrollLeft: '+=200px'}, 'fast');
    });

    $('.scroll-left').click(function() {
        $('.product-items-container').animate({scrollLeft: '-=200px'}, 'fast');
    });
});
