var Pager = function(){
    this.paginate = function(route){
        $('#main').on('click','ol a',function(){
            var page =$(this).data('page');
            $.get(route, {page: page}, function(data){
                $('#main').html(data);
                effects.makeHover();
            })
            return false;
        });
    }
}
$(function(){
    pager = new Pager();
})