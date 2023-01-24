<?php
require_once("lib.php");

// if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']) ){
//     echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
//     exit;
// }

$sql = "select * from members where user_id ='{$_POST['user_id']}'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

if (!$row['user_id']){
    echo "해당 아이디가 존재 하지 않습니다";
    exit;
}

$sql = "select * from members where user_id ='{$_POST['user_id']}' and user_pw = '{$_POST['user_pw']}'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

if (!$row['user_id']){
    echo "정확한 정보가 아닙니다.";
    exit;
}

//모든 정상 로그인이 진행된 상태
$_SESSION['user_id'] = $row['user_id'];

echo "정상 로그인 되었습니다. <br>";
echo "<a href = 'index.php'>홈으로</a>"
?>

