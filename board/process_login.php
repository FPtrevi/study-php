<?php
require_once("lib.php");
$libs = paging("board", 1);

$id = $_POST['user_id'];
$pw = $_POST['user_pw'];

$sql = "select * from user where id = '{$id}'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
if(!$row['id']) {
    echo "아이디가 없습니다";
    echo "<a href = 'index.php'>홈으로</a>";
    exit;
}

$sql = "select * from user where id = '{$id}' and pw = '{$pw}'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

if(!$row['id']) {
    echo "정확한 정보가 아닙니다";
    echo "<a href = 'index.php'>홈으로</a>";
    exit;
}

//모든 정상 로그인이 진행된 상태
$_SESSION['id'] = $row['id'];

echo "정상 로그인 되었습니다. <br>";
echo "<a href = 'index.php'>홈으로</a>";


?>