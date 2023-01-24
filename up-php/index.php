<?php
require_once("lib.php");
$libs = paging("members", 1);

echo "<a href = 'write.php'>등록</a>";

if(isset($_SESSION['user_id']) && $_SESSION['user_id']){
    echo "<a href = 'logout.php'>로그아웃</a>";
}else{
    echo "<a href = 'login.php'>로그인</a>";
}
// 페이지번호
$proc_page= isset($_GET['page'])? $_GET['page'] : 1;

// 데이터베이스 데이터 가져오기
echo "<table border='1'>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>성별</th>";
echo "<th>등록일</th>";
echo "<th>삭제</th>";
echo "</tr>";

while($row = mysqli_fetch_array($libs["result"])){
    echo "<tr>";
    echo "<td>{$libs['cnt']}</td>";
    echo "
    <td>
        <a href = './view.php?view_no={$row['idx']}&page_no={$proc_page}'>
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
        <input type = 'hidden' name = 'procPages' value = '{$proc_page}'>
        <input type='submit' value = '삭제'>
        </form>
    </td>
    ";
    echo "</tr>";
    $libs['cnt']++;
};
echo "</table>";

//페이징 프론트 작업
pagination($libs);
// 데이터베이스 닫기



mysqli_close($connect);
?>