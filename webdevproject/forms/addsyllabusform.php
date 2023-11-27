<!DOCTYPE html>
<html>
    <head>
        <title>Add Syallabus</title>
    </head>
    <body>
        <h1>Add Syallabus</h1>
        <a href="../index.php">Home</a>
        <br/><br/>

        <form action="../functions/addsyllabus.php" method="POST" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Syallabus Code</td>
                    <td><input type="text" name="code"></td>
                </tr>
                
                <tr>
                    <td>Syallabus Author</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td>
                        <select name="subjects">
                            <?php
                            include_once ("../dbConnection/mysqlconfig_connection.php");

                            ?>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>
    </body>
</html>