<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
        <?php
        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($_POST['Submit'])) {
            $code = $_POST['code'];
            $name = $_POST['name'];
        }
        ?>
    </body>
</html>