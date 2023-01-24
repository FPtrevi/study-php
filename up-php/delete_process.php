<?php
require_once("lib.php");


if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']) ){
    echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
    exit;
}

$sql = "delete from members where idx = {$_POST['del_no']}";
$pages = intval($_POST['procPages']);
$result = mysqli_query($connect, $sql);

if($result){
    echo "정상적으로 삭제되었습니다.";
}else{
    echo "삭제에 실패 하였습니다.";
}

echo "<a href='index.php?page={$pages}'> 홈으로 </a>";
mysqli_close($connect);
?>