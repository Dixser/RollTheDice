$(document).ready(function() {
    $("div.weapon").hide();
    $("div.armor").hide();
    $("div.consumable").hide();
    $("input[name$='item_type']").click(function() {
        var test = $(this).val();

    });
});