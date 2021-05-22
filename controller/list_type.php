<?php include("sql_connection.php"); ?>
<?php
    $sql_list_all = "select * from `product_type` ORDER BY `id`";
    $result_list_all = $conn->query($sql_list_all);
?>
<h1>TYPE LIST</h1>
<table border="1" style="width:100%">
    <tr>
        <!-- <td>ID</td> -->
        <td>id</td>
        <td>type_name</td>
        <td>description</td>
    </tr>
    <?php
    foreach ($result_list_all as $key => $value_list_all) {
        echo "<tr>";
            // echo "<td>" . $value_list_all["id"]. "</td>";
            echo "<td>" . $value_list_all["id"]. "</td>";
            echo "<td>" . $value_list_all["type_name"]. "</td>";
            echo "<td>" . $value_list_all["description"]. "</td>";
        echo "<tr>";
    }
    ?>
</table>