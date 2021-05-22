$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });

    $('#add_type').click(function() {
        console.log('a1');
        $('#even').html("");
    });

    $('#even').click(function() {
        $(this).html("");
    });

});

