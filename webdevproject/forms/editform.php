<?php
    include_once("../dbConnection/mysqlconfig_connection.php");
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];
    }
?>