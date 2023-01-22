<?php
require_once("config/db_conn.php");

// trim = 양쪽 공백제거
$idx = $_POST['e_idx'];
$name = trim($_POST['name']);
$age = trim($_POST['age']);
if($_POST['gender'] == "" && empty($_POST['gender'])){
    $gender = "선택안함";
}else{
    $gender = trim($_POST['gender']);
}

$sql = "update members set name= '{$name}', age= {$age}, gender= '{$gender}' where idx = {$idx}";
$result = mysqli_query($connect, $sql);

if($result){
    echo "정상적으로 처리되었습니다.";
}else{
    echo "실패 하였습니다.";
}

echo "<a href='index.php'> 홈으로 </a>";
mysqli_close($connect);
?>