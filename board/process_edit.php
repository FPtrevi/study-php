<?php
require_once("lib.php");
if(!isset($_SESSION['id']) && empty($_SESSION['id']) ){
    echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
    exit;
}

$title = $_POST['title'];
$text = $_POST['text'];
$board_id = $_POST['board_id'];

$sql = "update board set title = '{$title}', text = '{$text}', date = now() where id = {$board_id}";
$result = mysqli_query($connect, $sql);

if($result){
    echo "저장에 성공했습니다.";
    echo "<a href='view.php?view_no={$board_id}'>돌아가기</a>";
}else{
    echo "에러 발생";
    echo "<a href='view.php?view_no={$board_id}'>돌아가기</a>";
    exit;
}

mysqli_close($connect);
?>