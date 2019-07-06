$(function () {

    $('label.switch_count').click(function() {
        var for_id = $(this).attr('for');
        var cur_val = $('input#'+for_id).val();
        var new_val = eval(cur_val + $(this).data('value'));
        $('input#'+for_id).val(new_val);
//        console.log(for_id);
    });

});