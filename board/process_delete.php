<?php
require_once("lib.php");
if(!isset($_SESSION['id']) && empty($_SESSION['id']) ){
    echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
    exit;
}

$board_id = $_POST["id"];


$sql = "Delete from board where id = {$board_id}";
$result = mysqli_query($connect ,$sql);

if(!$result){
    echo "에러 발생";
    echo "<a href='index.php'>돌아가기</a>";
    exit;
}

$sql = "delete from reply where board_id = {$board_id}";
$result = mysqli_query($connect,$sql);


if($result){
    echo "삭제에 성공했습니다.";
    echo "<a href='index.php'>돌아가기</a>";
}else{
    echo "에러 발생";
    echo "<a href='index.php'>돌아가기</a>";
    exit;
}
mysqli_close($connect);
?>