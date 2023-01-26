<?php
require_once("lib.php");
if(!isset($_SESSION['id']) && empty($_SESSION['id']) ){
    echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
    exit;
}

$title = $_POST['title'];
$text = $_POST['text'];
$user_id = $_POST['user_id'];

$sql = "insert into board(title, text, date, user_id) values ('{$title}', '{$text}', now(), '{$user_id}')";
$result = mysqli_query($connect, $sql);

mysqli_close($connect);
?>