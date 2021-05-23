<?php
    include("sql_connection.php");

    $type_id = $_POST['type_id'];
    echo $type_id;

    // $sql_check_type = "select * from `product_type` where id ='" . $id ."'";
    // $result = $conn->query($sql_check_type);

    // if ($result->num_rows == 0) {
    //     echo "not have type_id ='" . $id . "'";
    // }else {
    //     $sql_delete_type = "delete from product_type WHERE id='". $id ."'";
    //     echo "Delete type_id='" . $id ."'";
    //     $result = $conn->query($sql_delete_type);
    // }

?>