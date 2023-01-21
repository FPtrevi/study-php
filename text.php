<?php
$conn = mysqli_connect('localhost', 'deu20171194', '20171194', 'deu20171194');
mysqli_select_db($conn, 'deu20171194') or die("DB failed");

$sql = "select * from topic";
$result = mysqli_query($conn, $sql);


echo "<table border='1'>";
echo "<tr>";
echo "<th>No</th>";
echo "<th>Name</th>";
echo "<th>Text</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>$row[id]</td>";
    echo "<td>$row[title]</td>";
    echo "<td>$row[description]</td>";
    echo "</tr>";
};

echo "</table>";

mysql_close($conn);




// settype($_POST['id'], 'integer');
// $filtered = array(
//     'id' => mysqli_real_escape_string($conn, $_POST['id']),
//     'title' => mysqli_real_escape_string($conn, $_POST['title']),
//     'description' => mysqli_real_escape_string($conn, $_POST['description'])
// );


/*
// 전체 게시물 갯수
$sql = "select * from topic";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

// 한 페이지당 데이터 갯수
$list_num = 5;

// 한 블럭당 페이지 갯수
$page_num = 3;

//현재 페이지
$page = isset($_GET['page'])? $_GET['page'] : 1;

//토탈 페이지 갯수 = 전체 데이터 / 페이지당 데이터 갯수, ceil(올림), floor(내림), round(반올림)
$total_page = ceil($num / $list_num);

//전체 블럭 수 = 전체 페이지 수 / 블럭당 페이지 수
$total_block = ceil($total_page / $page_num);

//현재 블럭 번호 = 현제 페이지 번호 / 블럭당 페이지 수
$now_block = ceil($page / $page_num);

//블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;

//데이터가 0개인 경우
if($s_pageNum == 0){
    $s_pageNum = 1;
};

// 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;

// 마지막 번호가 전체 페이지를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
}

// 시작 번호 = (현재 페이지 번호 -1) * 페이지당 보여질 데이터 수
$start = ($page - 1) * $list_num;

// 글 번호
$cnt = $start + 1;

//기존 쿼리에 페이지 개념을 도입 limit
$sql = "select * from topic limit {$start}, {$list_num}";
$result = mysqli_query($conn, $sql);

require("fun.php");

req_test();

*/
// ?>

