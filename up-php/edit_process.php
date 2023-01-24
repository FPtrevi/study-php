<?php
require_once("lib.php");

if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']) ){
    echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
    exit;
}
require_once("config/db_conn.php");

// trim = 양쪽 공백제거
$idx = $_POST['e_idx'];
$user_id = $_POST['users_id'];
$user_pw = $_POST['users_pw'];
$name = trim($_POST['name']);
$age = trim($_POST['age']);
$pages = $_POST['pages_no'];
if($_POST['gender'] == "" && empty($_POST['gender'])){
    $gender = "선택안함";
}else{
    $gender = trim($_POST['gender']);
}

$sql = "update members set user_id = '{$user_id}', user_pw = '{$user_pw}', name= '{$name}', age= {$age}, gender= '{$gender}' where idx = {$idx}";

$result = mysqli_query($connect, $sql);

if($result){
    echo "정상적으로 처리되었습니다.";
}else{
    echo "실패 하였습니다.";
}

echo "<a href='index.php?page={$pages}'> 홈으로 </a>";
mysqli_close($connect);
?>