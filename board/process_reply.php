<?php
require_once("lib.php");
if(!isset($_SESSION['id']) && empty($_SESSION['id']) ){
    echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
    exit;
}

$board_id = $_POST['board_id'];
$text = $_POST['text'];
$user_id = $_SESSION['id'];

$sql = "insert into reply (text, user_id, board_id) values ('{$text}', '{$user_id}', {$board_id})";
$result = mysqli_query($connect, $sql);
?>