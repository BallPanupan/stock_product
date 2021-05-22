<script>
    $('#btn_add_type').click(function(){
        var type_name = $('#type_name').val();
        $('#type_name').val('');
        //console.log(type_name);
        add_type(type_name);
    })
</script>

<h1>ADD TYPE</h1>

<form action="javascript:void(0)" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>type name</th>
            <th><input type="text" name="type_name" id="type_name"></th>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="submit" name="submit" id="btn_add_type"></td>
        </tr>
    </table>

</form>