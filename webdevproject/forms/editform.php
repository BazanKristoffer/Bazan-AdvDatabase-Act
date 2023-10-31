<?php
    include_once("../dbConnection/mysqlconfig_connection.php");
    $id = $_GET['id'];
    $result = mysqli_query($dbc, "SELECT * FROM tblsubject WHERE subject_id = $id");
    while($res = mysqli_fetch_array($result)) {
        $code = $res['subject_code'];
        $name = $res['subject_name'];
    }
?>