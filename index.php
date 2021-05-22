<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="index.js"></script>

    <title>update stock</title>

    <?php include("sql_connection.php"); ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">

                <h1>MENU</h1>
                <div class='menu-tab'>
                    <?php include './menu/menu.php';?>
                </div>

            </div>

            <div class="col-sm-3">
                <h1>event</h1>

                <div id="even">asdasdsd
                </div>

            </div>


            <div class="col-sm-3">
                <h3>C3</h3>
            </div>

            <div class="col-sm-3">
                <h3>C3</h3>
            </div>


        </div>
    </div>


</body>

</html>