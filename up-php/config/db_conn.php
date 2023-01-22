<?php
$server_name = "localhost";
$user = "deu20171194";
$password = "20171194";
$database = "deu20171194";

$connect = mysqli_connect($server_name, $user, $password, $database);
mysqli_select_db($connect, $database) or die("DB 선택 실패");
?>