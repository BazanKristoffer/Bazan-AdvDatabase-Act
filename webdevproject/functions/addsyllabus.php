<!DOCTYPE html>
<html>
    <head>
        <title>Add Syllabus</title>
    </head>
    <body>
        <?php
            include_once("../dbConnection/mysqlconfig_connection.php");

            if(isset($_POST['Submit'])) {
                $code = $_POST['code'];
                $name = $_POST['author'];
                $subject = $_POST['subject'];

                if(empty($code) || empty($author)) {
                    if(empty($code)) {
                        echo "<font color='red>'Syllabus Code field is empty.</font><br/>";
                    }
                    if(empty($name)) {
                        echo "<font color='red'>Syallabus Author field is empty.</font><br/> ";
                    }
                    echo"<br/><a href='javascript:self.history.back();'>Go Back<a/>";
                }    
                else {
                    $result = mysqli_query($dbc, "INSERT INTO tblsyllabus(syllabus_code, syllabus_author, subject_id) VALUES('$code','$name','$subject')");
                    echo "<font color='green'>Data added sucessfully.";
                    echo "<br/><a href='../index.php'>View Result</a>";
                }
            }
        ?>
    </body>
</html>