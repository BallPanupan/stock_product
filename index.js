$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });

    $('#add_type').click(function() {
        console.log('add_type');
        $('#even').html("");
        $('#even').load("./controller/form_type.php");
    });

    $('#add_product').click(function() {
        console.log('add_product');
        $('#even').html("");
        $('#even').load("./controller/form_product.php");
    });



});

