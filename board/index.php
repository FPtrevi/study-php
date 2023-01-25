<?php
require_once("lib.php");
$libs = paging("board", 1);

//로그인 세션
if(isset($_SESSION['id']) && $_SESSION['id']){
    echo "<a href = 'write.php'>글 쓰기 </a>";
    echo "<a href = 'logout.php'>로그아웃</a>";
}else{
    echo "<a href=sign.php>회원가입 </a>";
    echo "<a href = 'login.php'>로그인</a>";
}

//게시글
echo "<table border='1'>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>제목</th>";
echo "<th>작성자</th>";
echo "<th>등록일</th>";
// echo "<th>삭제</th>";
echo "</tr>";

// $sql = "select * from board";
// $result = mysqli_query($connect, $sql);


while($row = mysqli_fetch_array($libs["result"])){
    // print_r($row);
    echo "<tr>";
    echo "<td>{$libs['cnt']}</td>";
    echo "
    <td>
        <a href = './view.php?view_no={$row[0]}'>
        {$row['title']}
        </a>
    </td>
    ";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['date']}</td>";
    // echo "
    // <td>
    //     <form action = './delete_process.php' method = 'post'>
    //     <input type = 'hidden' name = 'del_no' value = '{$row["idx"]}'>
    //     <input type = 'hidden' name = 'procPages' value = '{$proc_page}'>
    //     <input type='submit' value = '삭제'>
    //     </form>
    // </td>
    // ";
    echo "</tr>";
    $libs['cnt']++;
};
echo "</table>";


//페이징 처리
pagination($libs);
mysqli_close($connect);
?>
