<?php
// var_dump($_POST);
$conn = mysqli_connect('localhost', 'deu20171194', '20171194', 'deu20171194');

$filtered = array(
    'title' => mysqli_escape_string($conn, $_POST['title']),
    'description' => mysqli_escape_string($conn, $_POST['description'])
);

$sql = "
    INSERT INTO topic
        (title, description, created)
        values(
            '{$filtered['title']}',
            '{$filtered['description']}',
            NOW()
        )
";

// echo $sql;

$result = mysqli_query($conn, $sql);
if($result === false){
    echo '저장하는 과정에서 문제 발생, 관리자에게 문의 요망';
}else{
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
}

?>