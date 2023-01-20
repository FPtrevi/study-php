<?php
$conn = mysqli_connect('localhost', 'deu20171194', '20171194', 'deu20171194');

$sql = "
    INSER INTO topic
        (title, description, created)
        value(
            'MYSQL1',
            'MYSQL is...',
            NOW()
        )
";
// echo $sql;
$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
}
?>