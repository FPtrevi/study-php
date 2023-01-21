<?php
$conn = mysqli_connect('localhost', 'deu20171194', '20171194', 'deu20171194');

settype($_POST['id'], 'integer');
$filtered = array(
    'id' => mysqli_real_escape_string($conn, $_POST['id'])
);

$sql = "delete from topic where id = {$filtered['id']}";

$result = mysqli_query($conn, $sql);


if($result === false){
    echo '저장하는 과정에서 문제 발생';
    print(mysqli_error($conn));
}else{
    echo '삭제에 성공했습니다. <a href="index.php">돌아가기</a>';
}

?>