<?php
    include("sql_connection.php");

    $type_id = $_POST['type_id'];

    $sql_check_type = "select * from `product_type` where id ='" . $type_id ."'";
    $result = $conn->query($sql_check_type);

    if ($result->num_rows == 0) {
    }else {
        $sql_delete_type = "delete from product_type WHERE id='". $type_id ."'";
        $result = $conn->query($sql_delete_type);
    }
    $type_id = "";

?>
