;
$(function () {
    $('.sortable tbody').sortable();
    $('.formbe_table tbody').sortable();
    $("body").on("click", ".sortable .row_add", function () {
        var $tr = $(this).closest("tr");
        var $clone = $tr.clone();
        $tr.after($clone);
    });
    $("body").on("click", ".sortable .row_del", function () {
        if ($(this).closest("tbody").find("tr").length > 1) {
            $(this).closest("tr").remove();
        }
    });
});
