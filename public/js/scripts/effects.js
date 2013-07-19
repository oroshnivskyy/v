var Effects = function(){
    this.hover =function(){
        $('#main').on({
            mouseenter: function () {
                $(this).find('.product-box-info').stop().animate({bottom: '0'}, 200)
            },
            mouseleave: function () {
                $(this).find('.product-box-info').stop().animate({bottom: '-200px'}, 1000)
            }
        },'.products-grid li.item')
    }
}

$(function(){
   effects = new Effects();
});