<?php
require_once("config/db_conn.php");

// trim = 양쪽 공백제거
$name = trim($_POST['name']);
$age = trim($_POST['age']);


if($_POST['gender'] == "" && empty($_POST['gender'])){
    $gender = "선택안함";
}else{
    $gender = trim($_POST['gender']);
}

//파일 업로드 추가
$upload_dir = "./uploads";
$ext_chk = array("jpg", "jpeg", "png", "gif");

//변수
$err = $_FILES['photo']['error'];
$file_name = $_FILES['photo']['name'];
$file_ext = explode(".", $file_name);

if(!in_array($file_ext, $ext_chk)){
    echo "허용되지 않는 파일입니다 <br />";
    exit();
}

move_uploaded_file($_FILES['photo']['tmp_name'], $upload_dir."/".$file_name);
// file.jpg.jin.png

$sql = "insert into members(name, age, gender, regdate, img_path, img_name) values ('{$name}', {$age}, '{$gender}', '{$upload_dir}','{$file_name}',now())";
$result = mysqli_query($connect, $sql);

if($result){
    echo "정상적으로 처리되었습니다.";
}else{
    echo "실패 하였습니다.";
}

echo "<a href='index.php'> 홈으로 </a>";
mysqli_close($connect);
?>