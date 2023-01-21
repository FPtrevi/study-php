<?php
$conn = mysqli_connect('localhost', 'deu20171194', '20171194', 'deu20171194');

settype($_POST['id'], 'integer');
$filtered = array(
    'id' => mysqli_real_escape_string($conn, $_POST['id']),
    'title' => mysqli_real_escape_string($conn, $_POST['title']),
    'description' => mysqli_real_escape_string($conn, $_POST['description'])
);

$sql = "update topic set title = '{$filtered['title']}', description = '{$filtered['title']}' where id = {$filtered['id']}";
$result = mysqli_query($conn, $sql);


if($result === false){
    echo '저장하는 과정에서 문제 발생';
}else{
    echo '저장 완료 <a href="index.php">돌아가기</a>';
}

?>