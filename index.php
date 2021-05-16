<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>update stock</title>

    <?php include("sql_connection.php"); ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">

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
            </div>

            <div class="col-sm-4">
                C2
            </div>
            <div class="col-sm-4">
                <h3>C3</h3>
            </div>
        </div>
    </div>


</body>

</html>