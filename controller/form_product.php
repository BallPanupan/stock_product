<?php
    $link2 = "http://localhost/stock_product/controller/api/all_type.php";
    $json = file_get_contents($link2);
    $all_type = json_decode($json);
?>

<h1>ADD PRODUCT</h1>
<form action="controller/add_product.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>name</td>
            <th><input type="text" name="name" id="name" autocomplete="off"></th>
        </tr>
        <tr>
            <td>type</td>
            <th>
                <select name="type_product" id="type_product">
                    <?php
                        foreach ($all_type as $key => $value) {
                            echo "<option value=". $value->type_name .">". $value->type_name . "</option>";
                        }
                    ?>
                </select>
            </th>
        </tr>
        <tr>
            <td>price</td>
            <td><input type="text" name="price" id="price" autocomplete="off"></td>
        </tr>
        <tr>
            <td>description</td>
            <td>
                <textarea id="description" name="description" rows="4" cols="50"></textarea>
            </td>
        </tr>
        <tr>
            <td>image</td>
            <td><input type="file" name="fileToUpload" id="fileToUpload" autocomplete="off"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Upload Image" name="submit"></td>
        </tr>
    </table>

</form>