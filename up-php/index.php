<?php
session_start();
// PHP와 MySQL 연결
include_once("config/db_conn.php");


// 데이터베이스 입력
// $rand = rand(1,100);
// $name = "고객 {$rand}번";
// $age = rand(20,80);
// $gender = "여";
// $sql_query = "insert into members (name, age, gender, regdate) values ('{$name}','{$age}','{$gender}', now())";
// $result = mysqli_query($connect, $sql_query);


echo "<a href = 'write.php'>등록</a>";

if(isset($_SESSION['user_id']) && $_SESSION['user_id']){
    echo "<a href = 'logout.php'>로그아웃</a>";
}else{
    echo "<a href = 'login.php'>로그인</a>";
}


// 데이터베이스 데이터 가져오기
$sql = "select * from members order by idx desc";
$result = mysqli_query($connect, $sql);
echo "<table border='1'>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>성별</th>";
echo "<th>등록일</th>";
echo "<th>삭제</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>{$row['idx']}</td>";
    echo "
    <td>
        <a href = './view.php?view_no={$row['idx']}'>
        {$row['name']}
        </a>
    </td>
    ";
    echo "<td>{$row['age']}</td>";
    echo "<td>{$row['gender']}</td>";
    echo "<td>{$row['regdate']}</td>";
    echo "
    <td>
        <form action = './delete_process.php' method = 'post'>
        <input type = 'hidden' name = 'del_no' value = '{$row["idx"]}'>
        <input type='submit' value = '삭제'>
        </form>
    </td>
    ";
    echo "</tr>";
};
echo "</table>";

// 데이터베이스 닫기
mysqli_close($connect);
?>