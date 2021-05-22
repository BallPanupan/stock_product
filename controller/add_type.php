<?php
    include("sql_connection.php");

    $type_name = $_POST["type_name"];

    $sql_add_type ="INSERT INTO product_type (type_name)
    VALUES ('$type_name')";

    if ($conn->query($sql_add_type) === TRUE) {
        //echo "New record created successfully";

    } else {
        echo "Error: " . $sql_add_type . "<br>" . $conn->error;
    }

    $conn->close();


?>