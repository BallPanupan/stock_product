<form action="add_prodict.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>name</th>
            <th><input type="text" name="name" id="name"></th>
        </tr>
        <tr>
            <td>price</td>
            <td><input type="text" name="price" id="price"></td>
        </tr>
        <tr>
            <td>description</td>
            <td><input type="text" name="description" id="description"></td>
        </tr>
        <tr>
            <td>image</td>
            <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Upload Image" name="submit"></td>
        </tr>
    </table>

</form>