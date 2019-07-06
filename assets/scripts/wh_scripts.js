;
$(function() {
    $('body').on('click','.wh-variants a',function() {
        $('input[name=art_id]').val($(this).data('art_id'));
        calc_price();
    });
    
    $('body').on('click','.wh-attributes a, .wh-attributes button',function() {
        calc_price();
    });
    
    function calc_price () {
        if ($('.wh-variants .uk-active a').length) {
            price = $('.wh-variants .uk-active a').data('price');
        } else {
            price = $('#wh_art_price').data('price');
        }
        $('input.wh_attribute').remove();
        $('.wh-attributes .uk-active a, .wh-attributes .uk-card-primary').each(function() {
            price = parseFloat(price) + parseFloat($(this).data('price'));
            $('#wh_form_detail').append('<input type="hidden" name="wh_attr[]" value="'+$(this).data('attr_id')+'" class="wh_attribute">');
        });
        
        $('.product_price').html(parseFloat(price).toFixed(2));
        
    }
    
    if ($('#wh_art_price').length) {
        calc_price();
    }
    
});