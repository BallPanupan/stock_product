$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });

    $('#add_type').click(function() {
        console.log('add_type');
        $('#even').html("");
        $('#even').load("./controller/form_type.php");
        $('#description').load("./controller/list_type.php");
    });

    $('#add_product').click(function() {
        console.log('add_product');
        $('#even').html("");
        $('#even').load("./controller/form_product.php");
        $('#description').html("");
        
    });

    $('#btn_add_type').click(function(){
        $('#description').load("./controller/list_type.php");
        type_name = $('input[name="type_name"]').val();
    });

});

function add_type(type_name){
    $.post("controller/add_type.php",{
        type_name: type_name,
    },function(){
        console.log(type_name)
        $('#description').load("./controller/list_type.php");
    });
}

function delete_type(type_id){
    $.post("/controller/delete_type.php",{
        type_id: type_id,
    },function(){
        console.log(type_id)
        //$('#description').load("./controller/list_type.php");
    });
}