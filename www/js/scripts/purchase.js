var Purchase = function(){
    this.initCommonFeatures = function(){
        var form = $('.b-input-i');
        $('.b-label',form).bind({
            'click': function(){
                $(this).hide().prev('.b-input, .b-ta').focus();
            }
        });
        $('.ico_type_cover-close').click(function(){
            $(this).parents('.b-popup-i').hide();
        });
        $('.b-popup__bg').click(function(){
            $(this).parents('.b-popup-i').hide();
        });
        $('.b-input, .b-ta',form).bind({
            'focus': function(){
                $(this).next('label').hide();
            },
            'blur': function(){
                if ($(this).val() == '')
                    $(this).next('label').show();
            }
        });
        this.initPurchaseData();
        return false;
    }
    this.showForm = function($button){
        this.$productName.html($button.data('name'));
        this.$productSize.html($button.data('size'));
        this.$productCost.html($button.data('cost'));
        this.$productId.val($button.data('id'));
        this.$popupForm.show(500);
        return false;
    }
    this.initPurchaseData = function(){
        this.$popupForm = $('div.b-popup-i');
        this.$productName = $('#purchase_product_name');
        this.$productSize = $('#purchase_product_size');
        this.$productCost = $('#purchase_product_cost');
        this.$productId = $('#purchase_product_id');
        this.$purchaseForm = $('#purchase_form');
        
        $('body' ).on('click','button.do_buy', function(){
            purchase.showForm($(this));
        });
        return false;
    }
    
    this.submit = function(){
        var data = {
            username: this.$purchaseForm.find( "input[name='username']" ).val(),
            phone: this.$purchaseForm.find( "input[name='phone']" ).val(),
            delivery: this.$purchaseForm.find( "input[name='delivery']:checked" ).val(),
            note: this.$purchaseForm.find( "textarea[name='note']" ).val(),
            id: this.$purchaseForm.find( "input[name='product_id']" ).val()
        };
        $.post( this.$purchaseForm.attr( 'action' ), data, function(){
            $( '#purchase_got' ).show();
            setTimeout(function() {
                purchase.$popupForm.hide(500);
            }, 5000);
        } );
        return false;
    }
}
$(function(){
    purchase = new Purchase();
    purchase.initCommonFeatures();
});