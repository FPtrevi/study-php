<?php
require_once("lib.php");
if(!isset($_SESSION['id']) && empty($_SESSION['id']) ){
    echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
    exit;
}

$sql = "select * from user where id = '{$user_id}'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

$usr_name = $row['name'];
$text = $_POST['reply'];
$user_id = $_SESSION['id'];
$board_id = $_POST['board_id'];




$sql = "insert into reply (text, user_id, board_id) values ('{$text}', '{$user_id}', {$board_id})";
$result = mysqli_query($connect, $sql);
if(!$result){
    echo "오류발생";
    exit;
}

echo "<a href='./view.php?view_no={$board_id}'>돌아가기</a>";


?>