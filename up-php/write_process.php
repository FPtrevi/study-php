<?php
session_start();

if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id']) ){
    echo "로그인을 해야 이용할 수 있는 페이지 입니다. <br> <a href = 'login.php'>로그인</a>";
    exit;
}

require_once("config/db_conn.php");

// trim = 양쪽 공백제거
$user_id = trim($_POST['user_id']);
$user_pw = md5(trim($_POST['user_pw']));

// var_dump( md5($user_pw) );
// exit;

$name = trim($_POST['name']);
$age = trim($_POST['age']);


if($_POST['gender'] == "" && empty($_POST['gender'])){
    $gender = "선택안함";
}else{
    $gender = trim($_POST['gender']);
}

//파일 업로드 추가
// $upload_dir = "./uploads";
// $ext_chk = array("jpg", "jpeg", "png", "gif");

//변수
// $err = $_FILES['photo']['error'];
// $file_name = $_FILES['photo']['name'];
// $file_ext = explode(".", $file_name);

// if(!in_array($file_ext, $ext_chk)){
//     echo "허용되지 않는 파일입니다 <br />";
//     exit();
// }

// move_uploaded_file($_FILES['photo']['tmp_name'], $upload_dir."/".$file_name);
// file.jpg.jin.png

$sql = "insert into members(user_id, user_pw, name, age, gender, regdate) values ('{$user_id}', '{($user_pw)}', '{$name}', {$age}, '{$gender}',now())";
$result = mysqli_query($connect, $sql);

if($result){
    echo "정상적으로 처리되었습니다.";
}else{
    echo "실패 하였습니다.";
}

echo "<a href='index.php'> 홈으로 </a>";
mysqli_close($connect);
?>