<?php
session_start();

if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']) ){
    echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
    exit;
}
require_once("config/db_conn.php");

$sql = "delete from members where idx = {$_POST['del_no']}";
$result = mysqli_query($connect, $sql);

if($result){
    echo "정상적으로 삭제되었습니다.";
}else{
    echo "삭제에 실패 하였습니다.";
}

echo "<a href='index.php'> 홈으로 </a>";
mysqli_close($connect);
?>