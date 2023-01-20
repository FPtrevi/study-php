<?php
$conn = mysqli_connect('localhost', 'deu20171194', '20171194', 'deu20171194');

// 1row
// $sql = "select id from topic where id = 1";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result);
// echo '<h1>'.$row['title'].'</h1>';
// echo $row['description'];

// all rows
$sql = "select * from topic";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
    echo '<h1>'.$row['title'].'</h1>';
    echo $row['description'];
}
?>