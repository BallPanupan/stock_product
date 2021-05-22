<?php
    header('Content-Type: application/json');
    include("../sql_connection.php");

    $sql_list_all = "select * from `product_type` ORDER BY `id`";
    $result_list_all = $conn->query($sql_list_all);

    $data_arr = [];
    foreach ($result_list_all as $key => $value) {
        array_push($data_arr, $value);
    }

    echo json_encode($data_arr, JSON_UNESCAPED_UNICODE );
?>
