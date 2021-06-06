<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="index.js"></script>
<?php include("sql_connection.php"); ?>
<?php
    $sql_list_all = "select * from `product_type` ORDER BY `id`";
    $result_list_all = $conn->query($sql_list_all);
?>

<script>

    $(document).on('click', '#delete_type', function() {
        type_id = $(this).val();
        delete_type(type_id);
    })

</script>

<h1>TYPE LIST</h1>
<table border="1" style="width:100%">
    <tr>
        <!-- <td>ID</td> -->
        <td>id</td>
        <td>type_name</td>
        <td>delete</td>
        <!-- <td>description</td> -->
    </tr>
    <?php
    foreach ($result_list_all as $key => $value_list_all) {
        echo "<tr>";
            // echo "<td>" . $value_list_all["id"]. "</td>";
            echo "<td>" . $value_list_all["id"]. "</td>";
            echo "<td>" . $value_list_all["type_name"]. "</td>";
            //echo "<td>" . $value_list_all["description"]. "</td>";
            echo "<td>" . "<button name='subject' type='submit' id='delete_type' class='btn btn-danger btn-sm' value='". $value_list_all["id"] . "'>Delete</button>". "</td>";

        echo "<tr>";
    }
    ?>
</table>