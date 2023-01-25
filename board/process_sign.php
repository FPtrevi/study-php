<?php
require_once("lib.php");
$libs = paging("board", 1);
$arr = array();
$sql = "select id from user";
$result = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($result)){
    array_push($arr, $row['id']);
}

// print_r($_POST);
$id = $_POST['users_id'];
$pw = $_POST['users_pw'];
$name = $_POST['name'];

if($id && $pw && $name){
    $sql = "insert into user (id, pw, name) values('{$id}', '{$pw}', '{$name}')";
    $result = mysqli_query($connect, $sql);

    if($result){
        echo "환영합니다.";
        echo "<a href='index.php'> 홈으로 </a>";
    }else{
        if(in_array($id, $arr)){
            echo "아이디 중복입니다 다시 입력해 주세요";
            echo "<a href='sign.php'>돌아가기</a>";
        }else{
            echo "등록에 실패하셨습니다.";
            echo "<a href='sign.php'>돌아가기</a>";
        }
    }
}else{
    echo "오류입니다";
    echo "<a href='sign.php'>돌아가기</a>";
    exit;
}



mysqli_close($connect);
?>