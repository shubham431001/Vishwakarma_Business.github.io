<?php
$host = "127.0.0.1:3306";
$username = "root";
$pass = "";
$db_name = "testing";
$conn = mysqli_connect($host, $username, $pass, $db_name);

if (!$conn) {
    echo "Connection failed" . mysqli_connect_error();
}
?>