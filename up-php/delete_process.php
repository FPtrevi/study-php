<?php
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