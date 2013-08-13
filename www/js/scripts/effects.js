var Effects = function(){
    this.hover =function(){
        if($.browser.device!==false){
            this.makeHover();
            return false;
        }
        $('#main').on({
            mouseenter: function () {
                $(this).find('.product-box-info').stop().animate({bottom: '0'}, 200)
            },
            mouseleave: function () {
                $(this).find('.product-box-info').stop().animate({bottom: '-200px'}, 1000)
            }
        },'.products-grid li.item')
    }
    
    this.makeHover = function(){
        if($.browser.device!==false){
            $('#main').find('.product-box-info').stop().animate({bottom: '0'}, 1000)
        }
    }
}

$(function(){
   $.browser={device: (/android|webos|iphone|ipad|ipod|blackberry/i.test(navigator.userAgent.toLowerCase()))};
   effects = new Effects();
});